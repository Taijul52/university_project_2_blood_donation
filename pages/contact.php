<?php include_once '../header/header.php'; ?>
<body style="background:#f6f6f6;">
<section class="navigation">
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container">
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

                <form class="navbar-form navbar-btn navbar-right">
                    <div class="form-group form-group-sm">
                        <input type="text" class="form-control" placeholder="username">
                        <input type="password" class="form-control" placeholder="password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Sing In</button>
                    <span>or</span>
                    <a href="form.html" class="btn btn-warning navbar-btn btn-sm">Registration</a>
                </form>


                <ul class="nav navbar-nav">

                    <li><a href="../index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
<!--                    <li><a href="#">protfilo</a></li>-->
                    <li><a href="contact.php">Contact</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</section>
<section class="contact">

    <div class="container">
        <div class="row">
            <div class="contact-caption clearfix">
                <div class="contact-heading text-center">
                    <h2>contact us</h2>
                </div>

                <div class="col-md-5 contact-info text-left">
                    <h3>contact information</h3>
                    <div class="info-detail">

                        <ul>
                            <li><i class="fa fa-map-marker"></i><span>Address:</span> 123 ,road no-34
                                rajshahi,bangladesh
                            </li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-phone"></i><span>Phone:</span>017......</li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-fax"></i><span>Fax:</span>86094809</li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-envelope"></i><span>Email:</span>Email name@domain.com</li>
                        </ul>
                    </div>
                </div>


                <div class="col-md-6 col-md-offset-1 contact-form">
                    <h3>if any question please tell us</h3>

                    <form class="form">
                        <input class="name" type="text" placeholder="Name">
                        <input class="email" type="email" placeholder="Email">
                        <input class="phone" type="text" placeholder="Phone No:">
                        <textarea class="message" name="message" id="message" cols="30" rows="10"
                                  placeholder="Message"></textarea>
                        <button type="button" class="btn btn-warning btn-lg">Submit</button>
                        <br>
                        <br>
                        <br>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section><!-- end of contact section -->

<footer class="foot text-center">
    <div class="container">
        <ul class="list-inline">
            <a href="">Twitter</a>
            <a href="">Facebook</a>
            <a href="">Youtube</a>
        </ul>
        <p>&copy; Copyright reserved</p>
    </div>
</footer>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
