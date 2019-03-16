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
    <h2 style="color:#F34336;">Why Donate Blood?</h2>
    <p> Safe blood saves lives and improves health. Blood transfusion is needed for:
        women with complications of pregnancy, such as ectopic pregnancies and haemorrhage before, during or after
        childbirth;
        children with severe anaemia often resulting from malaria or malnutrition;
        people with severe trauma following man-made and natural disasters; and
        many complex medical and surgical procedures and cancer patients.
        It is also needed for regular transfusions for people with conditions such as thalassaemia and sickle cell
        disease and is used to make products such as clotting factors for people with haemophilia.
        There is a constant need for regular blood supply because blood can be stored for only a limited time before
        use. Regular blood donations by a sufficient number of healthy people are needed to ensure that safe blood will
        be available whenever and wherever it is needed.
        Blood is the most precious gift that anyone can give to another person — the gift of life. A decision to donate
        your blood can save a life, or even several if your blood is separated into its components — red cells,
        platelets and plasma —
        which can be used individually for patients with specific conditions.</p>
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
