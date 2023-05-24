<?php
include 'connect.php';
session_start();
if (!isset($_SESSION["email"])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>

<body>
<h1>Thông Tin học sinh</h1>
    <?php
    echo "Xin chào " .$_SESSION["email"];
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Student Id</th>
                <th scope="col">Username</th>
                <th scope="col">Student Name</th>
                <th scope="col">Student phone</th>
                <th scope="col">Date of birth</th>
                <th scope="col">Student Address</th>
                <th scope="col">Student Class</th>
                <th scope="col">Teacher Name</th>
                <th scope="col">Student Email</th>
                <th scope="col">Student Teacher Id</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sqlS = "Select * from `user` where email = '" . $_SESSION["email"] . "'";
            $resultS = mysqli_query($conn, $sqlS);
            if ($resultS) {
                while ($rowS = mysqli_fetch_assoc($resultS)) {
                    $Sid = $rowS['id'];
                    $Susername=$rowS['username'];
                    $Sname = $rowS['name'];
                    $Sdob = $rowS['dob'];
                    $Saddress = $rowS['address'];
                    $Sclass = $rowS['class'];
                    $Steacher = $rowS['teacher_name'];
                    $Semail = $rowS['email'];
                    $Sphone = $rowS['phone'];
                    $SteacherID = $rowS['teacherID'];
                    echo ' <tr>
                    <th scope="rowS">' . $Sid . '</th>
                    <td>' . $Susername . '</td>
                    <td>' . $Sname . '</td>
                    <td>' . $Sphone . '</td>
                    <td>' . $Sdob . '</td>
                    <td>' . $Saddress . '</td>
                    <td>' . $Sclass . '</td>
                    <td>' . $Steacher . '</td>
                    <td>' . $Semail . '</td>
                    <td>' . $SteacherID . '</td>
                    <td><button class="btn btn-primary"><a href="update.php?
                updateid=' . $Sid . '">Update</a></button>
                </td>
                    </tr>';
                }
            }
            ?>
            <!-- <td>
                <button class="btn btn-primary"><a href="update.php?
                updateid='. $Sid .'">Update</a></button>
            </td> -->
        </tbody>


    </table>



    <a href="logout.php">Log out</a>
</body>

</html>