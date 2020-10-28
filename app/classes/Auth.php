<?php


namespace App\classes;
use app\classes\Database;
use http\Encoding\Stream\Debrotli;


class Auth
{
    public function signUp($data){
        $directory='../assets/images/';
        $imageUrl=$directory.$_FILES['image']['name'];
        $tempSource=$_FILES['image']['tmp_name'];
        $imageExtension=pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
        $imageSize=$_FILES['image']['size'];
        $check=getimagesize($_FILES['image']['tmp_name']);
        if($check){
            if(file_exists($imageUrl)){
                die('This image already exist,please choose another image');
            }else{
                if($imageSize>=5000000000){
                    die('Your Image is too large,please select an image within 500kb');
                }else{
                    if($imageExtension!='jpg' && $imageExtension!='JPG' && $imageExtension!='png' && $imageExtension!='PNG'){
                        die('Image type is not supported,please use jpg or png');
                    }else{
                        $sql1="SELECT * FROM users WHERE email='$data[email]'";
                        $queryResult=mysqli_query(Database::dbConnection(),$sql1);
                        if(mysqli_num_rows($queryResult)>0){
                            $message='<h5 style="color: red">Duplicate email, please entar new email!!</h5>';
                            return $message;
                        }else{
                            move_uploaded_file($tempSource,$imageUrl);
                            $sql="INSERT INTO users(name,email,password,mobile,gender,address,image) 
                              VALUES ('$data[name]','$data[email]','$data[password]','$data[mobile]','$data[gender]','$data[address]','$imageUrl')";
                            if(mysqli_query(Database::dbConnection(),$sql)){
                                $message='<h5 style="color: #1e7e34">Sign Up Successful, please click '.'<a href="index.php" style="color: #001489">Sign In</a></h5>';
                                return $message;

                            }else{
                                die('Query Problem'.mysqli_error(Database::dbConnection()));
                            }
                        }


                    }
                }
            }
        }else{
            die('Please choose an image file');
        }

    }

    public function signIn($data){
        $sql="SELECT * FROM users WHERE email='$data[email]' AND password='$data[password]'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult=mysqli_query(Database::dbConnection(),$sql);
            $user=mysqli_fetch_assoc($queryResult);

            if($user){
                session_start();
                $_SESSION['id']=$user['id'];
                $_SESSION['name']=$user['name'];
                $_SESSION['image']=$user['image'];
                header('Location:world-music.php');
            }else{
                $message = "Please enter valid email and password";
                return $message;
            }

        }else{
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }
    }

    public function logOut(){
        unset( $_SESSION['id']);
        unset( $_SESSION['name']);
        header('Location:index.php');

    }



}