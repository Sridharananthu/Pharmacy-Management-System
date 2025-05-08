<?php
if(count($_POST)>0)
{    
     include 'mydbCon.php';
     
     $title = $_POST['title'];
     $type = $_POST['type'];
     $qt = $_POST['qt'];
    

 if(empty($_POST['id'])){
 
      $query = "INSERT INTO dis (title,type,qt)
      VALUES ('$title','$type','$qt')"; // insert data into database
     }else{
       $query = "UPDATE dis set id='" . $_POST['id'] . "',title='" . $_POST['title'] . "', type='" . $_POST['type'] . "', qt='" . $_POST['qt'] . "' WHERE id='" . $_POST['id'] . "'"; // update form data from the database
     }
    $res = mysqli_query($dbCon, $query);
    
if($res) 
{
 echo json_encode($res);
    } else 
{
     echo "Error: " . $sql . "" . mysqli_error($dbCon);
    }
}
?>