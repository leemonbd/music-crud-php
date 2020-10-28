<?php


namespace App\classes;
use app\classes\Database;


class Music
{
    public function videoMusic($data){

        $videoDirectory='../assets/videos/';
        $videoUrl=$videoDirectory.$_FILES['videofile']['name'];
        $videoTempSource=$_FILES['videofile']['tmp_name'];
        $imageDirectory='../assets/images/';
        $imageUrl=$imageDirectory.$_FILES['videoimage']['name'];
        $imageTempSource=$_FILES['videoimage']['tmp_name'];

        $sql="INSERT INTO videos(songtitle,videofile,videoimage) VALUES ('$data[songtitle]','$videoUrl','$imageUrl')";
        move_uploaded_file($videoTempSource,$videoUrl);
        move_uploaded_file($imageTempSource,$imageUrl);
        if(mysqli_query(Database::dbConnection(),$sql)){
            $videoMessage="Saved Successfully";
           return $videoMessage;
        }else{
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }
    }

    public function showVideoMusic(){
        $sql="SELECT * FROM videos";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult=mysqli_query(Database::dbConnection(),$sql);
            return $queryResult;

        }else{
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }
    }


    public function audioMusic($data){

        $audioDirectory='../assets/audios/';
        $audioUrl=$audioDirectory.$_FILES['audiofile']['name'];
        $audioTempSource=$_FILES['audiofile']['tmp_name'];

        $sql="INSERT INTO audios(songtitle,songartist,audiofile) VALUES ('$data[songtitle]','$data[songartist]','$audioUrl')";
        move_uploaded_file($audioTempSource,$audioUrl);
        if(mysqli_query(Database::dbConnection(),$sql)){
            $audioMessage="Saved Successfully";
            return $audioMessage;
        }else{
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }
    }

    public function showAudioMusic(){
        $sql="SELECT * FROM audios";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult=mysqli_query(Database::dbConnection(),$sql);
            return $queryResult;

        }else{
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }
    }

    public function showAllAudioSong(){
        $sql="SELECT * FROM audios";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult=mysqli_query(Database::dbConnection(),$sql);
            return $queryResult;

        }else{
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }
    }

    public function showAllAudioSongModal($data){
        $sql="SELECT * FROM audios WHERE id='$data'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult1=mysqli_query(Database::dbConnection(),$sql);
            return $queryResult1;
            

        }else{
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }
    }

    public function updateAudioSong($data){

        $audioDirectory='../assets/audios/';
        $audioUrl=$audioDirectory.$_FILES['audiofile']['name'];
        $audioTempSource=$_FILES['audiofile']['tmp_name'];
        move_uploaded_file($audioTempSource,$audioUrl);
        $sql = "UPDATE audios SET songtitle='$data[songtitle]',songartist='$data[songartist]',audiofile='$audioUrl' WHERE id='$data[id]'";
        if (mysqli_query(Database::dbConnection(), $sql)) {

            header('Location:edit-delete-audio.php');
        } else {
            die('Query Problem' . mysqli_error(Database::dbConnection()));
        }
    }



    public function showAllVideoSong(){
    $sql="SELECT * FROM videos";
    if(mysqli_query(Database::dbConnection(),$sql)){
        $queryResult=mysqli_query(Database::dbConnection(),$sql);
        return $queryResult;

    }else{
        die('Query Problem'.mysqli_error(Database::dbConnection()));
    }
}

    public function showAllVideoSongModal($data){
        $sql="SELECT * FROM videos WHERE id='$data'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult1=mysqli_query(Database::dbConnection(),$sql);
            return $queryResult1;

        }else{
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }
    }

    public function updatevideoSong($data){

        $videoDirectory='../assets/videos/';
        $videoUrl=$videoDirectory.$_FILES['videofile']['name'];
        $videoTempSource=$_FILES['videofile']['tmp_name'];
        $imageDirectory='../assets/images/';
        $imageUrl=$imageDirectory.$_FILES['videoimage']['name'];
        $imageTempSource=$_FILES['videoimage']['tmp_name'];
        move_uploaded_file($videoTempSource,$videoUrl);
        move_uploaded_file($imageTempSource,$imageUrl);
        $sql = "UPDATE videos SET songtitle='$data[songtitle]',videofile='$videoUrl',videoimage='$imageUrl' WHERE id='$data[id]'";
        if (mysqli_query(Database::dbConnection(), $sql)) {

            header('Location:edit-delete-video.php');
        } else {
            die('Query Problem' . mysqli_error(Database::dbConnection()));
        }
    }

    public function deleteAudioMusic($id){
        $sql = "DELETE FROM audios WHERE id='$id'";
        if (mysqli_query(Database::dbConnection(), $sql)) {

        } else {
            die("Query Problem" . mysqli_error(Database::dbConnection()));
        }
    }

    public function deleteVideoMusic($id){
        $sql = "DELETE FROM videos WHERE id='$id'";
        if (mysqli_query(Database::dbConnection(), $sql)) {

        } else {
            die("Query Problem" . mysqli_error(Database::dbConnection()));
        }
    }






}