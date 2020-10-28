<?php
session_start();
if(isset($_SESSION['id'])){
    header('Location:world-music.php');
}

require_once '../vendor/autoload.php';
use app\classes\Auth;
$message='';
if(isset($_POST['btn'])){
    $message=Auth::signIn($_POST);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logo.png">
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/Gotham%20Rounded.css" rel="stylesheet">
    <link href="../assets/css/video-js.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row"  style="margin-top: 250px;">
       <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 container-align"  >
            <div class="clock ">
                <div class="hand hour" data-hour-hand></div>
                <div class="hand minute" data-minute-hand></div>
                <div class="hand second" data-second-hand></div>
                <div class="number number1"><div class="one">1</div></div>
                <div class="number number2"><div class="two">2</div></div>
                <div class="number number3"><div class="three">3</div></div>
                <div class="number number4"><div class="four">4</div></div>
                <div class="number number5"><div class="five">5</div></div>
                <div class="number number6"><div class="six">6</div></div>
                <div class="number number7"><div class="seven">7</div></div>
                <div class="number number8"><div class="eight">8</div></div>
                <div class="number number9"><div class="nine">9</div></div>
                <div class="number number10"><div class="ten">10</div></div>
                <div class="number number11"><div class="eleven">11</div></div>
                <div class="number number12"><div class="twelve">12</div></div>
            </div>
        </div>-->


        <div class="col-xl-5 col-lg-5 col-md-8 col-sm-10  col-10 mx-auto">
            <div>
                <p style="color: #1e7e34"><?php echo $message;?></p>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" id="myForm">
                        <div class="form-group" >
                            <label style="color: #001489">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>

                        <div class="form-group" >
                            <label style="color: #001489">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>

                        <div class="form-group">
                            <input type="submit" name="btn" class="btn btn-block " value="Sign In" style="background-color: #001489; color:#F0F0F0" id="submit">
                        </div>
                    </form>
                </div>
            </div>
            <div>
                <p>Don't have account? Please click <a href="sign-up-page.php" style="color: #001489">Sign Up</a></p>
            </div>

        </div>

    </div>


</div>


<script src="../assets/js/jquery-3.4.1.js"></script>
<script src="../assets/js/popper.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/video-js.js"></script>
<script src="../assets/js/script.js"></script>

</body>
</html>