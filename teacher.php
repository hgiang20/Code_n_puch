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
    <title>Teacher</title>
</head>

<body>
    <h1>Thông Tin Giáo viên</h1>
    <?php
    echo "Xin chào " . $_SESSION["email"];
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Teacher Id</th>
                <th scope="col">Username</th>
                <th scope="col">Teacher Name</th>
                <th scope="col">Teacher phone</th>
                <th scope="col">Date of birth</th>
                <th scope="col">Teacher Address</th>
                <th scope="col">Teacher Class</th>
                <th scope="col">Teacher Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sqlT = "Select * from `user` where email = '" . $_SESSION["email"] . "'";
            $resultT = mysqli_query($conn, $sqlT);
            if ($resultT) {
                while ($rowT = mysqli_fetch_assoc($resultT)) {
                    $Tid = $rowT['id'];
                    $Tusername=$rowT['username'];
                    $Tname = $rowT['name'];
                    $Tphone = $rowT['phone'];
                    $Tdob = $rowT['dob'];
                    $Taddress = $rowT['address'];
                    $Tclass = $rowT['class'];
                    $Temail = $rowT['email'];
                    echo ' <tr>
                    <th scope="rowS">' . $Tid . '</th>
                    <td>' . $Tusername . '</td>
                    <td>' . $Tname . '</td>
                    <td>' . $Tphone . '</td>
                    <td>' . $Tdob . '</td>
                    <td>' . $Taddress . '</td>
                    <td>' . $Tclass . '</td>
                    <td>' . $Temail . '</td>
                    <td><button class="btn btn-primary"><a href="updateTeacher.php?
                updateidT=' . $Tid . '">Update</a></button>
                </td>
                    </tr>';
                }
            }
            ?>
        </tbody>
    </table>
    <h2>Thông Tin học sinh</h2><br>
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
            $sqlS = "Select * from `user` where role = 0 and class='" . $Tclass . "'";
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
                    <td><button class="btn btn-primary"><a href="updateTeacher.php?
                updateidT=' . $Sid . '">Update</a></button>
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