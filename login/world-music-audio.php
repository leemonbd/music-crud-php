<?php
session_start();

require_once '../vendor/autoload.php';
use app\classes\Auth;
use app\classes\Music;

if(isset($_GET['logout'])){
    Auth::logOut();
}


//$id=$_GET['id'];
$queryResult=Music::showAudioMusic();





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

                    <?php include 'includes/menu-3.php'?>
                </div>
            </div>
            <div class="row" style="background: black">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"  style="margin:0;padding:0">
                    <a href="<?php echo $_SESSION['image']?>"><img src="<?php echo $_SESSION['image']?>" class="img-fluid profile-image rounded-circle" style="border: 3px solid #601e5f;height: 95%;width: 65%"></a>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9">
                    <img src="../assets/images/guitter.jpg" class="img-fluid">
                </div>
            </div>
        </div>
        <hr>

        <div class="container-fluid">
           <div class="row text-center">
               <?php while ($showAudio=mysqli_fetch_assoc($queryResult)) {?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                   <div class="card border-success mb-3" style="background-color:#282828;border: none">
                        <div class="card-header bg-transparent border-success embed-responsive " >
                            <p style="color: white; padding: 0;margin: 0"><b><?php echo $showAudio['songtitle']?></b></p>
                            <p style="color: white;padding: 0;margin: 0"><?php echo $showAudio['songartist']?></p>
                        </div>
                        <div class="card-footer bg-transparent border-success embed-responsive" style="color: red">
                            <audio class="embed-responsive-item" src="<?php echo $showAudio['audiofile']?>" controls></audio>>
                        </div>
                    </div>
                </div>
               <?php }?>
            </div>
        </div>





        <script src="../assets/js/jquery-3.4.1.js"></script>
        <script src="../assets/js/popper.js"></script>
        <script src="../assets/js/bootstrap.js"></script>
        <script src="../assets/js/video-js.js"></script>
        <script src="../assets/js/script.js"></script>
      <script>audioPlayer();</script>

      </body>
</html>