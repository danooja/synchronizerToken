<!DOCTYPE html>
<html lang="en">
<head>
    <title>Synchronizer Token Pattern</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <script src="bootstrap/dist/js/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
<style>
    body {
        background-color: lightgray;
    }
</style>
<!-- navbar start -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Synchronizer token pattern</a>
        </div>
        <ul class="nav navbar-nav">
            <?php
            if (!isset($_COOKIE['session_cookie'])) {
                echo "<li class='active'><a href='user.php'>User Profile</a></li>";
            }
            ?>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php
            if (!isset($_COOKIE['session_cookie'])) {
                echo "<li><a href='signin.php'><span class='glyphicon glyphicons-log-in'></span> SignIn </a></li>";
            }
            ?><?php
            if (isset($_COOKIE['session_cookie'])) {
                echo "<li><a href='signout.php'><span class='glyphicon glyphicons-log-out'></span> SignOut</a></li>";
            }
            ?>
        </ul>
    </div>
</nav>
<!-- navbar end -->

<div class="container">
    <div class="row" align="center" style="padding-top: 100px;">
        <div class="col-12">

            <div class="card">
                <h5 class="card-header">User Details</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">


                            <?php
                            if(isset($_COOKIE['session_cookie']))
                            {
                                session_start();
                                if ($_POST['csrf_Token'] == $_SESSION['CSRF_Token'])
                                {
                                    $fname=$_POST['name'];
                                    echo "<div class='alert alert-primary' role='alert'>".$fname."</div>";
                                }
                                else
                                {
                                    echo "<script>alert('WARNING :: CSRF Found !!!')</script>";
                                }
                            }
                            ?>


                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>

</body>
</html>