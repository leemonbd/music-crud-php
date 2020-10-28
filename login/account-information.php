<?php
session_start();
require_once "../vendor/autoload.php";
use app\classes\Accountinfo;
use app\classes\Auth;

if(isset($_GET['logout'])){
    Auth::logOut();
}

if(isset($_POST['btn'])){
    Accountinfo::updateAccountInfo($_POST);
}

if(isset($_POST['delete-btn'])){
    Accountinfo::deleteAccount($_POST);
}

$id=$_GET['id'];
$queryResult=Accountinfo::showAccountInfo($id);
$accountInfo=mysqli_fetch_assoc($queryResult);





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
<body class="background-image">

<div class="container-fluid">
    <div class="row" id="cover-image" style="background: #343a40">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <?php include 'includes/menu.php'?>

        </div>
    </div>
    <div class="row " style="margin-top: 20px" >
        <div class="col-xl-5 col-lg-5 col-md-8 col-sm-10  col-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data" id="signUpForm">

                        <div class="form-group">
                            <label style="color: #001489">User Name</label>
                            <input type="hidden" name="id" id="name" class="form-control" value="<?php echo $accountInfo['id']?>" >
                            <input type="text" name="name" id="name" class="form-control" value="<?php echo $accountInfo['name']?>" >

                        </div>


                        <div class="form-group">
                            <label style="color: #001489">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo $accountInfo['email']?>">
                        </div>

                        <div class="form-group">
                            <label style="color: #001489">Password</label>
                            <input type="password" name="password" id="password" class="form-control" value="<?php echo $accountInfo['password']?>">
                        </div>

                        <div class="form-group">
                            <label style="color: #001489">Mobile N0.</label>
                            <input type="number" name="mobile" id="mobile" class="form-control" value="<?php echo $accountInfo['mobile']?>">
                        </div>

                        <div class="form-group">
                            <label style="color: #001489">
                                <input type="radio" name="gender" id="gender" value="0" <?php echo $accountInfo['gender']==1?'checked':'';?> >Male
                                <input type="radio" name="gender" id="gender" value="1" <?php echo $accountInfo['gender']==0?'checked':'';?> >Female
                            </label>
                        </div>

                        <div class="form-group">
                            <label style="color: #001489">Address</label>
                            <textarea name="address" id="address" class="form-control"><?php echo $accountInfo['address']?></textarea>
                        </div>

                       <div class="form-group">
                            <label style="color: #001489">Image</label>
                            <input type="file" name="image" id="image" accept=image/* class="form-control">
                            <img src="<?php echo $accountInfo['image']?>" alt="" height="50px" width="50px" style="border: 1px solid" class="ml-3 mt-1">
                        </div>

                        <div class="form-group">
                            <input type="submit" name="btn" class="btn btn-block " value="Update your Information" style="background-color: #001489; color:#F0F0F0">
                        </div>

                        <div class="form-group">
                            <input type="submit" name="delete-btn" class="btn btn-block " value="Delete Account" style="background-color: #001489; color:#F0F0F0" onclick="return confirm('This account will delete permanently.Are you sure!!')">
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

<?php include 'includes/footer.php'?>


        <script src="../assets/js/jquery-3.4.1.js"></script>
        <script src="../assets/js/popper.js"></script>
        <script src="../assets/js/bootstrap.js"></script>
        <script src="../assets/js/video-js.js"></script>
        <script src="../assets/js/script.js"></script>

</body>
</html>