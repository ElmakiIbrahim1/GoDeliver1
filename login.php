<?php
$conn = new mysqli("localhost", "root", "", "e_commerce");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password FROM account WHERE email = ?");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($hashedPassword);
        $stmt->fetch();
        if (password_verify($password, $hashedPassword)) {
            $message = "<p class='success'>Login successful. Welcome!</p>";
            // You can redirect or start session here
        } else {
            $message = "<p class='error'>Invalid password.</p>";
        }
    } else {
        $message = "<p class='error'>No account with that email.</p>";
    }
    $stmt->close();
}

$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: sans-serif;
            background: #e0e0e0;
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
            background: #2196F3;
            color: white;
            border: none;
            padding: 10px;
            margin-top: 10px;
            border-radius: 6px;
            cursor: pointer;
        }
        .success { color: green; text-align: center; }
        .error { color: red; text-align: center; }
        .link { text-align: center; margin-top: 10px; }
    </style>
</head>
<body>
<div class="form-box">
    <h2>Login</h2>
    <?php echo $message; ?>
    <form method="post">
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Login</button>
    </form>
    <div class="link">
        Don't have an account? <a href="register.php">Register</a>
    </div>
    <div class="link">
    <a href="forgot.php">Forgot Password?</a><br></a>
</div>

</div>
</body>
</html>
