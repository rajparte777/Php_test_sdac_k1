<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"] === "GET"){

    $id = $_POST["id"];

    $sql=$conn->prepare("delete from products where id=?");
    $sql->bind_param("i",$id);
   if( $sql->execute()){

     header("location:dashboard.php");
   }
    

   
      
    }
?>