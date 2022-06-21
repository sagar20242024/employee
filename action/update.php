<?php
require_once "../db.php";

if(isset($_POST['update_employee'])){
    $id = $_POST['id'];
    $name = $_POST['emp_name'];
    $age = $_POST['emp_age'];
    $salary = $_POST['emp_salary'];
    $department = $_POST['emp_department'];
    $address = $_POST['emp_address'];

    $sql_add = "update employee set name='$name', age='$age', department='$department', salary='$salary', address='$address' where id='$id'";
    $sql_query = mysqli_query($connection, $sql_add);

    if($sql_query){
        return header("Location: ../index.php?success=Your message has been updated");
    }else{
        die("Error is ".mysqli_error($connection));
    }
    
}

?>