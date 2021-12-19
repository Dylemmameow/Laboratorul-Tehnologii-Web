
<html lang="en">

<?php
    include("./db.php");
    include("./functions.php");
?>

<body>

    <?php
        $activePage = "";
        include("./nav.php");
    ?>
    <section class="main_section heigth-100vh" id="regPage">
        <form class="login_form reg_form" name="regForm">
            <ul class="ul_login_form">
                <li class="form_header">Sign Up</li>
                <li class="form_elem"><input name="unameReg" type="text" placeholder="Username"></li>
                <li class="form_elem"><input name="emailReg" type="email" placeholder="Email"></li>
                <li class="form_elem"><input name="pwdReg" type="password" placeholder="Password"></li>
                <li class="form_elem"><input name="rpwdReg" type="password" placeholder="Repeat password"></li>
                <li class="form_elem"><button id="regBtn">Submit</button></li>
                <li class="form_links"><a href="#">Create account</a></li>
                <li class="form_links"><a href="#">Forgot password?</a></li>
            </ul>
        </form>
        
        <div class="container regSuccess hidden">
            <div class="serverData">
                <div>Your data has been successfully sent.
                    <img src="./img/ok.png" alt="Successfuly sent" width="52px" height="52px">
                    <br>
                    Now you can pretend you are signed in :)
                    text
                </div>
            </div>
        </div>

        <div class="container regFail hidden">
            <div class="serverData">
                <div>Your data hasn't been sent.
                    <img src="./img/notok.png" alt="Problem occured" width="52px" height="52px">
                    <br>
                    Something went wrong :(<br>
                    Try againt to fill the form.
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/index.js"></script>
</body>

</html>