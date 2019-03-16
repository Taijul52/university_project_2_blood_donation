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

<div class="container ">
    <section class="contact" style="color:#23527C" ,
    "font-family:tahoma"; >
    <div class="row">
        <div class="contact-caption clearfix">
            <div class="contact-heading text-center">
                <h2>Create an account</h2>
            </div>
            <div class="col-md-2 ">
            </div>
            <div class="col-md-10  contact-form">
                <form role="form" class="form" action="action.php" method="post" style="width: 65%; margin:auto">
                    <div class="form-group">
                        <label for="Fname">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Your name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="eid">Email:</label>
                        <input type="email" class="form-control" id="eid" placeholder="enter your email id"
                               name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="password" name="pass">
                    </div>
                    <div class="form-group">
                        <label for="cname">City Name:</label>
                        <input type="text" class="form-control" id="cname" placeholder="enter your city" name="city">
                    </div>
                    <div class="form-group">
                        <label>Blood group:</label>
                        <select class="form-control" name="blood_group">
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
                    </div>

                    <input type="submit" name="button" value="sign up" class="form-control btn btn-success" id="sign" >


                    <br><br>
                    <label><a href="signup.php" style="padding-top:20px">Already have an account?</a></label>
                </form>
            </div>
        </div>
    </div><!--end row-->
    </section>
</div>

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
