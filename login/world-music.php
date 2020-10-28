<?php
session_start();
if($_SESSION['id']==null){
    header('Location:index.php');
}

require_once '../vendor/autoload.php';
use app\classes\Auth;
use app\classes\Music;

if(isset($_GET['logout'])){
    Auth::logOut();
}
$videoMessage='';
if (isset($_POST['video-file-btn'])){
    $videoMessage=Music::videoMusic($_POST);
}

$audioMessage='';
if (isset($_POST['audio-file-btn'])){
    $audioMessage=Music::audioMusic($_POST);
}

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
                    <?php include 'includes/menu.php'?>
                </div>
            </div>
            <div class="row" style="background: black">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"  style="margin:0;padding:0;">
                    <a href="<?php echo $_SESSION['image']?>"><img src="<?php echo $_SESSION['image']?>" class="img-fluid profile-image rounded-circle" style="border: 3px solid wheat;height: 95%;width: 65%"></a>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9">
                    <img src="../assets/images/guitter.jpg" class="img-fluid">
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row ">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"  style="margin:0;padding:10px;">
                    <div class="hover-image">
                        <img src="../assets/images/ba.jpg" class="img-fluid image">
                        <div class="middle">
                            <input type="submit" name="btnBanglaVideo" class="text btn" value="Add Bangla Video Music" style="background-color: #001489; color:#F0F0F0">
                            <input type="submit" name="btnBanglaAudio" class="text btn mt-2" value="Add Bangla Audio Music" style="background-color: #001489; color:#F0F0F0">

                        </div>
                    </div>

                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"  style="margin:0;padding:10px;">
                    <div class="hover-image">
                        <img src="../assets/images/en.jpg" class="img-fluid image">
                        <div class="middle">
                            <input type="submit" name="btnEnglishVideo" class="text btn" value="Add English Video Music" style="background-color: #001489; color:#F0F0F0;">
                            <input type="submit" name="btnEnglishAudio" class="text btn mt-2" value="Add English Audio Music" style="background-color: #001489; color:#F0F0F0">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"  style="margin:0;padding:10px;">
                    <div class="hover-image">
                        <img src="../assets/images/hi.jpg" class="img-fluid image">
                        <div class="middle">
                            <input type="submit" name="btnHindiVideo" class="text btn" value="Add World Video Music" style="background-color: #001489; color:#F0F0F0;">
                            <input type="submit" name="btnHindiAudio" class="text btn  mt-2" value="Add World Audio Music" style="background-color: #001489; color:#F0F0F0">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"  style="margin:0;padding:10px;">

                    <div class="hover-image">
                        <img src="../assets/images/wo.jpg" class="img-fluid image">
                        <div class="middle">
                            <input type="submit" name="btnWorldVideo" data-toggle="modal" data-target="#addWorldMusicVideo" class="text btn" value="Add Others Video Music" style="background-color: #001489; color:#F0F0F0">
                            <input type="submit" name="btnWorldAudio" class="text btn mt-2" data-toggle="modal" data-target="#addWorldMusicAudio" value="Add Others Audio Music" style="background-color: #001489; color:#F0F0F0">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr>


        <?php include 'includes/modal.php'?>
        <?php include 'includes/footer.php'?>






        <script src="../assets/js/jquery-3.4.1.js"></script>
        <script src="../assets/js/popper.js"></script>
        <script src="../assets/js/bootstrap.js"></script>
        <script src="../assets/js/video-js.js"></script>
        <script src="../assets/js/script.js"></script>

      </body>
</html>