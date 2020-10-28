<?php
session_start();

require_once '../vendor/autoload.php';
use app\classes\Auth;
use app\classes\Music;

if(isset($_GET['logout'])){
    Auth::logOut();
}

//$id=$_GET['id'];
$queryResult=Music::showVideoMusic();





?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>World Music</title>
        <link rel="shortcut icon" type="image/png" href="../assets/images/logo.png">
        <link href="../assets/css/bootstrap.css" rel="stylesheet">
        <link href="../assets/css/style.css" rel="stylesheet">
        <link href="../assets/css/video-js.css" rel="stylesheet">
      </head>
      <body class="background-image">
        <div class="container-fluid" >
            <div class="row" id="cover-image" style="background: #343a40">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <?php include 'includes/menu-2.php'?>
                </div>
            </div>
            <div class="row" style="background: black">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"  style="margin:0;padding:0;border: 1px solid">
                    <a href="<?php echo $_SESSION['image']?>"><img src="<?php echo $_SESSION['image']?>" class="img-fluid profile-image rounded-circle" style="border: 3px solid wheat;height: 95%;width: 65%"></a>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9">
                    <img src="../assets/images/guitter.jpg" class="img-fluid">
                </div>
            </div>
        </div>
        <hr>

        <div class="container-fluid">
            <div class="row text-center">
                <?php while ($showVideo=mysqli_fetch_assoc($queryResult)) {?>

                <div class="col-lg-3 col-md-6 mb-4">

                    <div class="card h-100 mt-2" >
                        <div class="card-body" style="background-color: black">
                            <div class="embed-responsive embed-responsive-16by9 ">
                                <video class="embed-responsive-item" src="<?php echo $showVideo['videofile']?>" controls poster="<?php echo $showVideo['videoimage']?>"></video>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h5><?php echo $showVideo['songtitle']?></h5>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>








        <script src="../assets/js/jquery-3.4.1.js"></script>
        <script src="../assets/js/popper.js"></script>
        <script src="../assets/js/bootstrap.js"></script>
        <script src="../assets/js/video-js.js"></script>
        <script src="../assets/js/script.js"></script>

      </body>
</html>