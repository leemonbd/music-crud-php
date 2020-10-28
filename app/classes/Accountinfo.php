<?php


namespace App\classes;
use app\classes\Database;


class Accountinfo
{
    public function showAccountInfo($data){
        $sql="SELECT * FROM users WHERE id='$data'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult=mysqli_query(Database::dbConnection(),$sql);
            return $queryResult;

        }else{
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }
    }


    public function updateAccountInfo($data){
        $directory='../assets/images/';
        $imageUrl=$directory.$_FILES['image']['name'];
        $tempSource=$_FILES['image']['tmp_name'];
        //$check=getimagesize($_FILES['image']['tmp_name']);
        
        if($_FILES['image']['name']!=""){
               move_uploaded_file($tempSource,$imageUrl);
                $sql = "UPDATE users SET name='$data[name]',email='$data[email]',password='$data[password]',mobile='$data[mobile]',gender='$data[gender]',address='$data[address]',image='$imageUrl' WHERE id='$data[id]'";
                if (mysqli_query(Database::dbConnection(), $sql)) {

                    header('Location:index.php');
                    unset( $_SESSION['id']);
                    unset( $_SESSION['name']);
                } else {
                    die('Query Problem' . mysqli_error(Database::dbConnection()));
            }
            
        }else{
            $sql = "UPDATE users SET name='$data[name]',email='$data[email]',password='$data[password]',mobile='$data[mobile]',gender='$data[gender]',address='$data[address]' WHERE id='$data[id]'";
                if (mysqli_query(Database::dbConnection(), $sql)) {
                    header('Location:index.php');
                    unset( $_SESSION['id']);
                    unset( $_SESSION['name']);
                } else {
                    die('Query Problem' . mysqli_error(Database::dbConnection()));
            }
            
        }


    }

    public function deleteAccount($data){
        $sql="DELETE FROM users where id ='$data[id]'";
        if (mysqli_query(Database::dbConnection(), $sql)) {

            unset( $_SESSION['id']);
            unset( $_SESSION['name']);
            header('Location:index.php');

        } else {
            die('Query Problem' . mysqli_error(Database::dbConnection()));
        }

    }



}



