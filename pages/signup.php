<?php
session_start();
if (isset($_POST['button'])) {
    require 'connection.php';
    $useremail = $_POST['email'];
    $userpass = $_POST['pass'];

    $result = mysqli_query($conn, 'select *from signup where email="' . $useremail . '" and pass="' . $userpass . '"');

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $useremail;
        header("location: my.php");
    } else
        echo "<script>alert('invalid email or password')</script>";

}
//if(isset($_GET['logout'])){
//session_unregister('ussername');
//}

?>
<?php include_once '../header/header.php';?>
<body style="background:#333333;">
<section class="navigation">
    <nav class="navbar navbar-default">
        <div class="container-fluit">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav">

                    <li><a href="../index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="whydon.php">Why Donate Blood?</a></li>
                    <li><a href="whyneed.php">Why Needs Blood?</a></li>
                    <li><a href="signup.php">Login</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</section>
<div class="container ">
    <section class="contact" style="color:#23527C" ,
    "font-family:tahoma"; >
    <form action="signup.php?action=login" method="post">
        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" placeholder="enter your email">
        </div>

        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" name="pass" placeholder="enter your password">

        </div>
        <input type="checkbox">Rememeber me<br>

        <!--<button type= "button" class= "btn btn-primary btn-lg">login</button><br>-->
        <input type="submit" value="login" name="button" class="lg btn btn-primary">
        <a href="" style="color:red">Forgot password</a>
    </form>
</
/section>
</div><!--end row-->

<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = 'https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>
