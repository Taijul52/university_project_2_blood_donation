<?php include_once '../header/header.php'; ?>
<body style="background:#333333;color:black">
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

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Add Data</a>
                        <ul class="dropdown-menu">
                            <li><a href="addblood_sell.php">Blood Sells</a></li>
                            <li><a href="addblood_stock.php">Blood Stock</a></li>
                        </ul>
                    <li><a href="myaccount.php">Store</a></li>
                    <li><a href="my.php">My account</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php
            session_start();
            if (isset($_SESSION['email'])) {
                require 'connection.php';
                $email = $_SESSION['email'];

                $result = mysqli_query($conn, "select *from signup where email='$email'");
                $prof = mysqli_fetch_array($result);
                echo "<h1 style='color:#4CAF50'><b><i>Welcome to your profile</i></b></h1>";
                echo "<h4 style='color:#F34336'><b><i>Name:</i></b></h4>" . "<p style= 'color:#CCFF99'>" . ' ' . $prof['name'] . "</p>";
                echo "<h4 style='color:#F34336'><b><i>Email:</i></b></h4>" . "<p style= 'color:#CCFF99'>" . ' ' . $prof['email'] . "</p>";
                echo "<h4 style='color:#F34336'><b><i>City:</i></b></h4>" . "<p style= 'color:#CCFF99'>" . ' ' . $prof['city'] . "</p>";
                echo "<h4 style='color:#F34336'><b><i>Blood Group:</i></b></h4>" . "<p style= 'color:#CCFF99'>" . ' ' . $prof['blood_group'] . "</p>";


            }


            ?>
            <a href="update.php" style="color:#4CAF50"><b>Update your Profile</b></a>
            <br><br>

            <div>
                <img src="img/BigLogo.png" class="img-responsive">
            </div>
        </div>
        <div class="col-md-6">
            <img src="img/2.png" class="img-responsive">
        </div>
    </div>
</div>
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
