<?php

require_once 'db.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php
if(isset($_GET['update'])){
  $id = $_GET['update'];
  $sql_search_update = "select * from employee where id='$id'";
  $query_search_update = mysqli_query($connection, $sql_search_update);
  $row = mysqli_fetch_assoc($query_search_update);
   ?>
<form action="action/update.php" method="POST" auto_complete="off" class='container'>
  <input type="hidden" name="id" value="<?php echo $row['id'] ?>" id="">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="emp_name" id="" value="<?php echo $row['name'] ?>" class='form-control'>
    </div>
    <div class="form-group">
        <label for="">Age</label>
        <input type="number" name="emp_age" id="" class='form-control'  value="<?php echo $row['age'] ?>">
    </div>
    <div class="form-group">
        <label for="">Department</label>
        <input type="text" name="emp_department" id="" class='form-control' value="<?php echo $row['department'] ?>">
    </div>
    <div class="form-group">
        <label for="">Salary</label>
        <input type="number" name="emp_salary" id="" class='form-control' value="<?php echo $row['salary'] ?>">
    </div>
    <div class="form-group">
        <label for="">Address</label>
        <input type="text" name="emp_address" id="" class='form-control' value="<?php echo $row['address'] ?>">
    </div>
    <input type="submit" name="update_employee" id="" value="Update" class='btn btn-warning'>
</form>

<?php
}else{
  header("Location: ../index.php");
}

?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>