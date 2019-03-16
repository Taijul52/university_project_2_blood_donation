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
    <h2 style="color:#F34336;">Tips on Blood Donation</h2>
    <ol>
        <li>Have a good meal at least 3 hours before donating blood.</li>
        <li>Accept the snacks offered to you after the donation, it is vital that you have them. You are recommended to
            have a good meal later.
        </li>
        <li>Avoid smoking on the day before donating. You can smoke 3 hours after donation.</li>
        <li>You will not be eligible to donate blood if you have consumed alcohol 48 hours before donation.</li>
    </ol>
    <br>
    <h2 style="color:#F34336;">Misconceptions about donating blood</h2>
    <ol>
        <li>"I will feel drained and tired after donating" - You will not feel drained or tired if you continue to drink
            fluids and have a good meal.
        </li>
        <li>"I cannot resume normal activities" - You can resume all your normal activities, though you're asked to
            refrain.
        </li>
        <li>"I will have low blood" - If you are okayed to donate by the doctor you will still have surplus blood after
            the donation.
        </li>
        <li>"I can't take alcohol..." - You can on the next day.</li>
        <li>"It will be painful while donating" - No, you will not feel any pain.</li>
        <li>"I will feel dizzy and may faint" - You will not faint or feel uncomfortable after donating blood.</li>
        <li>"I may get AIDS!" - No! Make sure disposable syringes are used and all measures are taken to keep you germ
            free.
        </li>
        <li>"My blood is common. I don't think there will be demand for it" - That is why the demand for your type is
            greater than for rare types.
        </li>
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
