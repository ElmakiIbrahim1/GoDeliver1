<?php
$conn = new mysqli("localhost", "root", "", "e_commerce");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);

    // Check if email exists
    $stmt = $conn->prepare("SELECT id FROM account WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        // Generate reset token & expiry (1 hour)
        $token = bin2hex(random_bytes(16));
        $expires = date("Y-m-d H:i:s", strtotime("+1 hour"));

        // Save to DB
        $stmt->close();
        $update = $conn->prepare("UPDATE users SET reset_token = ?, reset_expires = ? WHERE email = ?");
        $update->bind_param("sss", $token, $expires, $email);
        if ($update->execute()) {
            // In real app: send email with this link
            $resetLink = "http://{$_SERVER['HTTP_HOST']}/reset_password.php?token=$token";
            $message = "<p class='success'>Reset link generated!<br>Click here to reset your password:<br><a href='$resetLink'>$resetLink</a></p>";
        } else {
            $message = "<p class='error'>Failed to save reset token.</p>";
        }
        $update->close();
    } else {
        $message = "<p class='error'>Email not found.</p>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Forget Password</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-box {
            background: white;
            padding: 30px;
            border-radius: 8px;
            width: 350px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        h2 { text-align: center; margin-bottom: 20px; }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        button {
            width: 100%;
            background: #ff5722;
            color: white;
            border: none;
            padding: 10px;
            margin-top: 10px;
            border-radius: 6px;
            cursor: pointer;
        }
        .success { color: green; text-align: center; word-break: break-all; }
        .error { color: red; text-align: center; }
        .link { text-align: center; margin-top: 10px; }
    </style>
</head>
<body>
<div class="form-box">
    <h2>Forgot Password</h2>
    <?php echo $message; ?>
    <form method="post">
        <input type="email" name="email" placeholder="Enter your registered email" required />
        <button type="submit">Send Reset Link</button>
    </form>
    <div class="link">
        Remember password? <a href="login.php">Login here</a>
    </div>
</div>
</body>
</html>
