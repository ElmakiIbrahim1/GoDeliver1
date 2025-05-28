<?php
// DATABASE CONNECTION
$conn = new mysqli("localhost", "root", "", "e_commerce");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO account (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);
    if ($stmt->execute()) {
        $message = "<p class='success'>Registration successful. <a href='login.php'>Login here</a>.</p>";
    } else {
        $message = "<p class='error'>Error: " . $stmt->error . "</p>";
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
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
            background: #4CAF50;
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
    <h2>Register</h2>
    <?php echo $message; ?>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Register</button>
    </form>
    <div class="link">
        Already have an account? <a href="login.php">Login</a>
    </div>
</div>
</body>
</html>
