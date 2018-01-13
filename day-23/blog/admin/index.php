<?php
session_start();
if(isset($_SESSION['id'])){
    header('Location: dashboard.php');
}
require_once '../vendor/autoload.php';
$login = new App\classes\Login;
$message = '';
if(isset($_POST['btn'])){

    $message = $login->adminLoginCheck($_POST);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>
<body>
<div class="container" style="margin-top: 150px;">
    <div class="row">
        <dic class="col-sm-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-danger"><?php echo $message; ?><br></h3>
                    <form action="" method="post">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-outline-primary btn-block">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </dic>
    </div>
</div>

<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>