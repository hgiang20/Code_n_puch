<?php
include 'connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "select * from user WHERE email='" . $email . "' and password='" . $password . "'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        if ($row["role"] == "0") {
            $_SESSION["email"] = $email;

            header("location: student.php");
        } elseif ($row["role"] == "1") {
            $_SESSION["email"] = $email;
            header("location: teacher.php");
        }
    } else {
        echo "email or password is incorect";
    }
}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <center>
        <h1>Log in uwwu</h1>
        <br><br><br><br>
        <div style="background-color: purple;">
            <br><br>

            <form action="#" method="POST">


                <div>
                    <label>email</label>
                    <input type="text" name="email" required>
                </div>
                <br><br>
                <div>
                    <label>password</label>
                    <input type="password" name="password" required>
                </div>
                <br><br>
                <div>
                    <input type="submit" value="login">
                </div>
            </form>
            <br><br>
    </center>
</body>

</html>