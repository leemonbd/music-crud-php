<?php
require_once "../vendor/autoload.php";
use app\classes\Auth;
$message='';
if(isset($_POST['btn'])){
    $message=Auth::signUp($_POST);

}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logo.png">
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/Gotham%20Rounded.css" rel="stylesheet">
    <link href="../assets/css/video-js.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row " style="margin-top: 50px" >
        <div class="col-xl-5 col-lg-5 col-md-8 col-sm-10  col-10 mx-auto">
            <?php echo $message;?>
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data" id="signUpForm">

                        <div class="form-group">
                            <label style="color: #001489">User Name</label>
                            <input type="text" name="name" id="name" class="form-control" >
                        </div>


                        <div class="form-group">
                            <label style="color: #001489">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label style="color: #001489">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label style="color: #001489">Mobile N0.</label>
                            <input type="number" name="mobile" id="mobile" class="form-control">
                        </div>

                        <div class="form-group">
                            <label style="color: #001489">
                                <input type="radio" name="gender" id="gender" value="1">Male
                            </label>
                            <label style="color: #001489">
                                <input type="radio" name="gender" id="gender" value="0">Female
                            </label>
                        </div>

                        <div class="form-group">
                            <label style="color: #001489">Address</label>
                            <textarea name="address" id="address" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label style="color: #001489">Image</label>
                            <input type="file" name="image" id="image" accept=image/* multiple class="form-control">
                           <!-- <img src="<?php echo $accountInfo['image']?>" alt="" height="50px" width="50px" style="border: 1px solid" class="ml-3 mt-1">-->
                        </div>

                        <div class="form-group">
                            <input type="submit" name="btn" class="btn btn-block " value="Signup" style="background-color: #001489; color:#F0F0F0">
                        </div>

                    </form>
                </div>

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