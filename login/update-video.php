<?php
session_start();
require_once "../vendor/autoload.php";
use app\classes\Auth;
use app\classes\Music;

if(isset($_GET['logout'])){
    Auth::logOut();
}
//$id=$_GET['id'];
$queryResult=Music::showAllAudioSong();

if(isset($_GET['edit'])){
    $id=$_GET['id'];
    $queryResult1=Music::showAllVideoSongModal($id);
    $showVideoById=mysqli_fetch_assoc($queryResult1);

}

if(isset($_POST['update-video-btn'])){
    Music::updatevideoSong($_POST);
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
<body class="background-image">

<div class="container-fluid">
    <div class="row" id="cover-image" style="background: #343a40">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <?php include 'includes/menu.php'?>
        </div>
    </div>

</div>
<div class="container">
    <div class="row " style="margin-top: 20px" >
        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data" id="signUpForm">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label style="color: #001489">Song Title</label>
                                <input type="hidden" name="id" class="form-control" value="<?php echo $showVideoById['id']?>" >
                                <input type="text" name="songtitle" class="form-control" value="<?php echo $showVideoById['songtitle']?>" >
                            </div>

                            <div class="form-group">
                                <label style="color: #001489">Artist Name</label>
                                <input type="file" name="videofile" accept="video/" class="btn btn-block "  style="background-color: #001489; color:#F0F0F0" value="<?php echo $showVideoById['videofile']?>">
                            </div>

                            <div class="form-group">
                                <label style="color: #001489">Choose an audio file </label>
                                <input type="file" name="videoimage" accept="image/" class="btn btn-block " style="background-color: #001489; color:#F0F0F0" value="<?php echo $showVideoById['videoimage']?>">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="update-video-btn" class="btn btn-block " value="Update video file" style="background-color: #001489; color:#F0F0F0" >
                            </div>
                        </form>
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

