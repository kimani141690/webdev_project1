
<!DOCTYPE html>
<html>

<head>
    <title>Alexawear.registration</title>
    <link rel="stylesheet" href="registration.css">
</head>

<body >

    <form action="process_registration.php" method="post">

        

        <section class="details">

            <div class="header">
                <h1> ALEXAWEAR<sup><small>TM</small></sup></h1>
                <h1>SIGN UP</h1>

            </div>

            </br>
            </br>

            <div class="user">
                <label for="user_name">User Name</label>
                <input type="text" name="name" id="user_name" placeholder="username" required>
            </div>
            </br>
            </br>

            <div class="E.A"> 
                <label for="user_email">Email Address</label>
                <input type="email" name="email" id="user_email" placeholder="Enter  email address" required>
            </div>

            </br>
            </br>

            <div class="create">

                <label for=" create_password">Create Password</label>
                <input type="password" name="cr_password" id="create_password" placeholder="Create a strong password"  minlength="8" 
                 maxlength="20" required>
            </div>
            </br>
            </br>

            <div class="confirm">
                <label for="confrim_password">Confirm Password</label>
                <input type="password" name="cn_password" id="confirm_password" placeholder="Confirm password" required>
            </div>
            </br>
            </br>

            <Button type="submit">Create Account</Button>
        </section>



    </form>



</body>

</html>