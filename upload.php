<?php
 $hostname = "localhost";
 $username = "root";
 $password = "";
 $dbname = "matches";

 $conn = mysqli_connect($hostname, $username, $password, $dbname);
 if(!$conn){
   echo "Database connection error".mysqli_connect_error();
 }
 if ( isset($_FILES['theimage']) && isset($_POST['name1'])){
    $img_name =$_FILES['theimage']['name'];
    $name = $_POST["name1"];
    $id = $_POST["id"];
    $email = $_POST["name2"];
    $password = $_POST["name3"];
    $passwor = $_POST["passwor"];
    $img_size = $_FILES['theimage']['size'];
    $tmpname = $_FILES['theimage']['tmp_name']; 
    $error = $_FILES['theimage']['error'];
    if(!empty($name) && !empty($email) && !empty($passwor)){ 
        if($error===0){
            if($img_size>12500000){
                echo"the image is too big";
            }else{ 
                $img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
                $img_ex_lc =strtolower($img_ex);
                $allowed_exs= array("jpg","jpeg","webp","png");
                if(in_array($img_ex_lc, $allowed_exs)){
                    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                    $img_upload_path='uploads/'.$new_img_name;
                    move_uploaded_file($tmpname,$img_upload_path);
                    function random_strings($length_of_string)
                    { $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
                        return substr(str_shuffle($str_result), 
                        0, $length_of_string);}
                           $w=random_strings(10);
                           $sql1= "SELECT * FROM matches WHERE id='$id'";
                           $resul= mysqli_query($conn,$sql1); 
                           $row =mysqli_fetch_assoc($resul);
                        //    $sql = "INSERT INTO matches (match_name,match_id, match_date, results,link,image11)
                        //   VALUES('$name','$id','$email','$password','$passwor','$new_img_name')";
                         $sql = "UPDATE  matches SET match_name='$name',match_id='$id', match_date='$email', results='$password',link='$passwor',image11='$new_img_name'WHERE match_id= '$id'";
                           mysqli_query($conn,$sql); 
                           echo"match updated succesfully";
        
                          

                }else{
                    echo "cant upload image with this extension";
                }
            }
      
  
        }else{
            echo "unknown error occured";
        } 
    }else{
        echo "some missing fields are reqired";
    }
 }else{ 
    echo "fill in ";
}
?>