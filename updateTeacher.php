<?php
include 'connect.php';


$Tid = $_GET['updateidT'];
if (isset($_POST['submit'])) {
    $Tusername = $_POST['username'];
    $Tname = $_POST['name'];
    $Tphone = $_POST['phone'];
    $Tdob = $_POST['dob'];
    $Taddress = $_POST['address'];
    $Tclass = $_POST['class'];
    $Temail = $_POST['email'];

    $Tupdate = "update `user` set id=$Tid, username='$Tusername', name='$Tname', phone='$Tphone', 
    dob='$Tdob', address='$Taddress', class='$Tclass',email='$Temail'
     where id=$Tid";
    $TRupdate = mysqli_query($conn, $Tupdate);
    if ($TRupdate) {
        echo "Update succesfully";
        header('location: teacher.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teacher Update</title>
</head>

<body>
    <center>
        <h1>Update teacher uwwwwu</h1>
        <br><br><br><br>
        <div>
            <br><br>
            <form action="#" method="POST">
                <div>
                    <label>Username</label>
                    <input type="text" name="username" required>
                </div>
                <br><br>
                <div>
                    <label>Name</label>
                    <input type="text" name="name" required>
                </div>
                <br><br>
                <div>
                    <label>Phone</label>
                    <input type="text" name="phone" required>
                </div>
                <br><br>
                <div>
                    <label>Date of Birth</label>
                    <input type="date" name="dob">
                </div>
                <br><br>
                <div>
                    <label>Address</label>
                    <input type="text" name="address" required>
                </div>
                <br><br>
                <div>
                    <label>Class</label>
                    <input type="number" name="class" required>
                </div>
                <br><br>
                <div>
                    <label>Email</label>
                    <input type="text" name="email" required>
                </div>
                <br><br>
                <!-- <div>
                    <label>Class</label>
                    <input type="text" name="teacher_class" required>
                </div>
                <br><br>
                <div>
                    <label>Email</label>
                    <input type="text" name="teacher_email" required>
                </div>
                <br><br> -->
                <div>
                    <button type="submit" name="submit">submit</button>
                </div>
            </form>
            <br><br>
    </center>
</body>

</html>