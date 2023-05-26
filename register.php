<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>REGISTER</title>
        <link rel = "stylesheet" href = "css/register.css">
    </head>
    <body>
        <div class="container">
            <div class="title">Registration</div>
            <form action="https://httpbin.org/anything" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Fullname</span>
                        <input type="text" placeholder="Enter your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" placeholder="Enter your username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" placeholder="Enter your phone number" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="text" placeholder="Enter your password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="text" placeholder="Confirm your password" required>
                    </div>
                </div>
                <div class="check-box">
                    <div class="gender">
                        <p><span class="details">Gender</span></p>
                        <input type="radio" name="gioitinh" value="1"> Male<br>
                        <input type="radio" name="gioitinh" value="0"> Female<br>
                        <input type="radio" name="gioitinh" value="2"> Not prefer to say
                    </div>
                    <div class="role">
                        <p><span class="details">Role</span></p>
                        <input type="radio" name="noisinh" value="Student"> Student<br>
                        <input type="radio" name="noisinh" value="Teacher"> Teacher
                    </div>
                </div>
                <div class="regis">
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
    </body>
</html>



    <!-- <form class="login-form" action="#" method="post">
            <h1>Login</h1>
            <div class="input-field">
                <label for="username">Username</label>
                <input type="text" id="username" required="">
            </div>
            <div class="input-field">
                <label for="password">Passwork</label>
                <input type="password" id="password" required="">
            </div>
            <button type="submit">Submit</button>
        </form> -->


        
                <!-- <div class="gender-details">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="">
                            <span class="dot one"></span>
                            <span class="gender">Female</span>
                        </label>
                        <label for="">
                            <span class="dot one"></span>
                            <span class="gender">Prefer not to say</span>
                        </label>
                    </div>
                </div> -->
                <!-- <div class="role-details">
                    <span class="role-title">Role</span>
                    <div class="category">
                        <label for="">
                            <span class="dot one"></span>
                            <span class="role">Student</span>
                        </label>
                        <label for="">
                            <span class="dot one"></span>
                            <span class="role">Teacher</span>
                        </label>
                    </div>
                </div> -->