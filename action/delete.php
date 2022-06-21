<?php

require_once "../db.php";

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "delete from employee where id='$id'";
    $query = mysqli_query($connection, $sql);

    if($query){
        header("Location: ../index.php?success=Your item has been deleted");
    }
}else{
    header("Location: ../index.php");
}


?>