<?php
session_start();
require_once "../vendor/autoload.php";
use app\classes\Auth;
use app\classes\Music;

if(isset($_GET['logout'])){
    Auth::logOut();
}

if(isset($_GET['delete'])){
    $id=$_GET['id'];
    Music::deleteVideoMusic($id);

}

//$id=$_GET['id'];
$queryResult=Music::showAllVideoSong();




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
        <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 mx-auto">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">SL No</th>
                    <th scope="col">Song Title</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php while ($showVideotable=mysqli_fetch_assoc($queryResult)){?>
                    <tr>
                        <td><?php echo $showVideotable['id']?></td>
                        <td><?php echo $showVideotable['songtitle']?></td>
                        <td>
                            <a href="update-video.php?edit=true&id=<?php echo $showVideotable['id']?>">Edit</a>
                            <a href="?delete=true&id=<?php echo $showVideotable['id']?>">Delete</a>
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>


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

