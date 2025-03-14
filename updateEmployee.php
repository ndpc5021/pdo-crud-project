<?php
    require_once "db/connectdb.php";
    if(isset($_POST["submit"])){
        $emp_id=$_POST["emp_id"];
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $salary=$_POST["salary"];
        $department_id=$_POST["department_id"];
        $status=$controller->update($emp_id,$fname,$lname,$salary,$department_id);
        if($status){
           
            header("Location:index.php");


        }else{
            require_once "layout/error_message.php"; 
            header("Location:index.php");
        }

        


    }

?>