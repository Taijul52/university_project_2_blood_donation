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
    <div class="container" style="color:#CCFF99" ,
    "font-family:tahoma";>
    <h2>Blood facts</h2>

    <ol>
        <li>Blood is the life-maintaining fluid that circulates through the body's heart, arteries, veins and
            capillaries.
        </li>
        <li>Blood carries to the body nourishment, electrolytes, hormones, vitamins, antibodies, heat, and oxygen.</li>
        <li>Blood carries away from the body waste matter and carbon dioxide.</li>
        <li>Blood fights against infection and helps heal wounds, keeping you healthy.</li>
        <li>Blood makes up about 7% of your body's weight.</li>
        <li>A newborn baby has about one cup of blood in his or her body.</li>
        <li>White blood cells are the body's primary defence against infection.</li>
        <li>Granulocytes, a type of white blood cell, roll along blood vessel walls to search and destroy bacteria.</li>
        <li>Red blood cells carry oxygen to the body's organs and tissues.</li>
        <li>There are about one billion red blood cells in two to three drops of blood.</li>
        <li>Red blood cells live about 120 days in the circulatory system.</li>
        <li>Blood platelets help clotting and give those with leukemia and other cancers a chance to live.</li>
    </ol>


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
