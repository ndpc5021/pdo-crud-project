<?php
    $title ="หน้าแรกของเว็บไซต์";
    require_once "layout/header.php";
    require_once "db/connectdb.php";
    require_once "layout/check_admin.php";
    
    $result=$controller->getEmployees();
    // print_r($result->fetchALL(PDO::FETCH_ASSOC));
?>

    <h1 class="text-center"><?php echo "ข้อมูลพนักงาน" ; ?></h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ชื่อ</th>
            <th scope="col">นามสกุล</th>
            <th scope="col">เงินดือน</th>
            <th scope="col">แผนก</th>
            <th scope="col">ดำเนินการ</th>
            </tr>
        </thead>
        <tbody>
           <?php while($row=$result->fetch(PDO::FETCH_ASSOC))  {  ?>
                <tr>
                <td><?php echo $row["fname"];?></th>
                <td><?php echo $row["lname"];?></th>
                <td><?php echo number_format($row["salary"]);?></th>
                <td><?php echo $row["department_name"];?></th>
                <td>
                    <a onclick="return confirm('ต้องการลบข้อมูลหรือไม่?')"
                    href="delete.php?id=<?php echo $row["emp_id"];?>" class ="btn btn-danger">ลบข้อมูล</a>
                    <a href="editForm.php?id=<?php echo $row["emp_id"];?>" class ="btn btn-warning">แก้ไขข้อมูล</a>
                </td>
                </tr>
           <?php } ?>
        </tbody>
    </table>
   

</div>

</body>
</html>