<!DOCTYPE html>
<html lang="en">
<head>
    <title>Synchronizer Token Pattern </title>
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
            <a class="navbar-brand" href="index.php">Synchronizer Token Pattern</a>
        </div>
        <ul class="nav navbar-nav">
            <?php
            if (isset($_COOKIE['session_cookie'])) {
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
                <h5 class="card-header">Update User</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">


                            <?php
                            if(isset($_COOKIE['session_cookie'])) {
                                echo "
						        <form action='sessionValidate.php' method='POST' enctype='multipart/form-data'>
                            	<!-- CSRF Token -->
                            	<input type='hidden' name='csrf_Token' id='csrf_Token' value=''>
                                <!--  -->
                            <div class='form-group row'>
                            	<label for='name' class='col-sm-2 col-form-label'>Full Name</label>
                            <div class='col-sm-10'>
                                <input type='text' class='form-control' id='name' name='name' placeholder='Full Name' required>
                            </div>
                            </div>
                 
                                <button type='submit' class='btn btn-primary' id='submit' name='submit'>Submit</button>
                       </form>";
                            }
                            ?>

                            <script >
                                var request="true";
                                $.ajax({
                                    url:"csrf.php",
                                    method:"POST",
                                    data:{request:request},
                                    dataType:"JSON",
                                    success:function(data)
                                    {
                                        document.getElementById("csrf_Token").value=data.token;
                                    }
                                })
                            </script>







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