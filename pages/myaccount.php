<?php include_once '../header/header.php'; ?>
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

                    <li><a href="blood_sell.php">Blood Sells</a></li>
                    <li><a href="blood_stock.php">Blood Stock</a></li>
                    <li><a href="donor.php">Doners List</a></li>
                    <li><a href="my.php">My Account</a></li>

                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</section>
<section>
    <div class="container ">
        <div class="row">
            <div class="col-md-7">
                <h2 style="color:#5E0000" ;><i>"The Blood you donate gives someone another chance at life".</i></h2>
                <div style="color:#FFFF9B" ;>
                    <h2 style="color:#F34336" ;><i>GIVE THE GIFT OF LIFE</i></h2>
                    <h1 style="color:#F34336" ;><i><b>DONATE BLOOD</b></i></h1>
                    <h4 style="color:#F87822" ;><i>List of Everything You Need:</i></h4>
                    <li>If you want to buy blood, than go to Blood Sells</li>
                    <li>If you want to need blood, than go to Blood Stock</li>
                    <li>If you want to see donors list, than go to Donors List</li>
                    <li>If you want to go back your profile, than go to My Account</li>
                    <br><br>
                </div>


                <img src="img/BigLogo.png" class="img-responsive">


            </div>


            <div class="col-md-5">
                <img src="img/why.png" class="img-responsive" style="height:500px">
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
