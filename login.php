<!DOCTYPE html>
<html>
<head>
    <title>Login System</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center; /* Horizontal center */
            align-items: center;     /* Vertical center */
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .box {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            text-align: center;
            width: 300px;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 8px;
            margin-top: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
$message = "";

$correctUsername = "gerald";
$correctPassword = "12345";

if (isset($_POST['submit'])) {

    $username = $_POST['userName'];
    $password = $_POST['userPassword'];

    if ($username == $correctUsername && $password == $correctPassword) {
        $message = "Login Successful";
    } else {
        $message = "Login Failed";
    }
}
?>

<div class="box">
    <h2>Login</h2>

    <form method="post" action="">
        <label>Username</label><br>
        <input type="text" name="userName" required><br><br>

        <label>Password</label><br>
        <input type="password" name="userPassword" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($message != "") {
        echo "<h3>$message</h3>";
    }
    ?>
</div>

</body>
</html>