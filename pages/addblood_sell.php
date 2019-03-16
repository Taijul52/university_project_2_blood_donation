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
    </nav>
</section>

<div class="container ">
    <div class="row">
        <div class="col-md-6">
            <section class="contact" style="color:#4CAF50" ,
            "font-family:tahoma"; >
            <div class="row">
                <div class="contact-caption clearfix">
                    <div class="contact-heading text-center">
                        <br><br>
                        <h2 class="H2_ele">Create Blood Sells</h2>
                    </div>
                    <div class="col-md-2 ">
                    </div>
                    <div class="col-md-10  contact-form">
                        <form role="form" class="form" action="action.php" method="post">
                            <div class="form-group">
                                <label for="Fname">Customer Name:</label>
                                <input type="text" class="form-control" id="Fname" placeholder="your name"
                                       name="c_name">
                            </div>
                            <div class="form-group">
                                <label>Blood group:</label>
                                <select class="form-control" name="bg">
                                    <option>please select your blood group</option>
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>B+</option>
                                    <option>B-</option>
                                    <option>O+</option>
                                    <option>O-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                </select>
                                <br>
                                <div class="form-group">
                                    <label>No of Units</label>
                                    <input type="integer" class="form-control" id="no_unit" placeholder="no of unit"
                                           name="no_u">
                                </div>
                                <div class="form-group">
                                    <label>Contact:</label>
                                    <input type="integer" class="form-control" id="no_unit"
                                           placeholder="please insert your contact" name="con">
                                </div>
                                <div class="btn-group text-right">
                                    <input type="submit" class="btn btn-primary" value="Create" name="blood">
                                </div>

                                <br><br>
                        </form>
                    </div>
                </div>
            </div><!--end row-->
            </section>
        </div>


        <div class="col-md-6">
            <img src="img/why.png" class="img-responsive" style="height:500px">
        </div>
    </div>
</div>

</div><!-- /.navbar-collapse -->
</div><!-- /.container -->
</nav>
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
