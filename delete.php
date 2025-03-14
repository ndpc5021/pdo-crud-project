<?php
    require_once "db/connectdb.php";
    if(!isset($_GET["id"])){
        header("Location:index.php");


    }else{
        $id=$_GET["id"];
        $result=$controller->delete($id);
        if($result){
            header("Location:index.php");
        }
    }
   
    

?>