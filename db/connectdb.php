<?php
    $servername = "localhost";
    $username = "employees";
    $password = "8i1[asis1NRER)E.";
    $db="employeesDB";
    $dsn="mysql:host=$servername;dbname=$db;charset=utf8";

    try {
        $pdo = new PDO($dsn, $username, $password);
        // set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
        
    //ติดต่อข้อมูลพนักงาน
    require_once "db/controller.php";
    $controller=new Controller($pdo);
    //ติดต่อข้อมูลผู้ใช้ระบบ    
    require_once "db/user.php";
    $user=new User($pdo);

    // $result=$user->insertUser('admin2','12345');
    // if($result){
    //   echo "OK";
    // }else{
    //   echo "Not OK";
    // }
    
?>