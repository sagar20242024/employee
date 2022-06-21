<?php
require_once "../db.php";

if(isset($_POST['add_employee'])){
    $name = $_POST['emp_name'];
    $age = $_POST['emp_age'];
    $salary = $_POST['emp_salary'];
    $department = $_POST['emp_department'];
    $address = $_POST['emp_address'];

    $sql_add = "insert into employee(name, age, department, salary, address) values('$name','$age','$department','$salary','$address')";
    $sql_query = mysqli_query($connection, $sql_add);

    if($sql_query){
        return header("Location: ../index.php?success=Your message has been added");
    }else{
        die("Error is ".mysqli_error($connection));
    }
    
}

?>