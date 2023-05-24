<?php
include 'connect.php';


$Sid = $_GET['updateid'];
if (isset($_POST['submit'])) {
    $Sphone = $_POST['phone'];
    $Sdob = $_POST['dob'];
    $Saddress = $_POST['address'];

    $Supdate = "update `user` set id=$Sid, phone='$Sphone', 
    dob='$Sdob', address='$Saddress' where id=$Sid";
    $SRupdate = mysqli_query($conn,$Supdate);
    if ($SRupdate) {
        echo "Update succesfully";
        header('location: student.php');
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
    <title>Student Update</title>
</head>

<body>
    <center>
        <h1>Update student uwwwwu</h1>
        <br><br><br><br>
        <div>
            <br><br>
            <form action="#" method="POST">
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
                    <button type="submit" name="submit">submit</button>
                </div>
            </form>
            <br><br>
    </center>
</body>

</html>