<?php
require_once("connection.php");
include("functions.php");
?>
<?php include_once '../header/header.php'; ?>
<body style="background:#333333;">
<section class="navigation">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
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
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php
                if (isset($_GET['search'])) {
                    $donor_c = $_GET['Cname'];
                    $donor_b = $_GET['blood'];

                    $get_don = "select * from signup where city like '%$donor_c%' and blood_group like '%$donor_b%'";
                    $list_don = mysqli_query($conn, $get_don);
                    if ($list_don) {
                        while ($list = mysqli_fetch_array($list_don)) {

                            $don_name = $list['name'];
                            echo "<li class='list-group-item'>$don_name</li>";
                        }
                    } else {
                        echo "<p style='color:white;'>no contents found</p>";
                    }

                }
                ?>

            </div>

            <div class="col-md-8">
                <div style="padding-left: 250px"><img src="img/2.png" class="img-responsive"></div>
            </div>
        </div>
    </div>
</section>
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
