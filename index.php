
<?php
require_once 'functions/function.php';
$con = new Payroll();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="background-image:url(&quot;assets/img/accounting.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;background-color:rgba(18,10,2,0.35);">
    <div class="login-clean">

        <form method="post" style="background-color:rgba(255,255,255,0.38);">
            <h4 class="text-secondary text-center"> Payroll Management</h4>
            <div class="illustration"><img src="assets/img/NLIP.png" style="background-color:rgba(255,255,255,0.17);"></div>
            <div class="form-group"><input class="form-control" type="text" name="userid" placeholder="UserId" style="background-color:rgba(251,249,247,0.58);"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" style="background-color:rgba(247,249,252,0.54);"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="pay_login" style="background-color:rgb(231,120,23);">Log In</button></div>
            <?php
            if(isset($_POST['pay_login']))
            {
                $userid = $con->escape_string($_POST['userid']);
                $password = $con->escape_string($_POST['password']);
                $con->login($userid, $password);
            }
            ?>

        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>