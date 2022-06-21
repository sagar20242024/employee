<?php require_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['success'])){ ?>
        
   
<div class="alert alert-primary" role="alert">
  <?php echo $_GET['success']; ?>
</div>
    <?php
    }
?>
    <a href="insert.php" class="float-end btn btn-primary btn-sm">Add</a>
    <div class="container">
        <table class='table table-bordered table-striped table-hover'>
        <thead>
            <tr>
                <th>s.n</th>
                <th>name</th>
                <th>Adress</th>
                <th>Age</th>
                <th>Department</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </thead>
       
            <?php

            $sql_fetch = "select * from employee";
            $sql_fetch_query = mysqli_query($connection, $sql_fetch);
            $i=0;
            while($row = mysqli_fetch_assoc($sql_fetch_query)){
               $i++;
               $id = $row['id'];
                $name = $row['name'];
                $age = $row['age'];
                $address = $row['address'];
                $department = $row['department'];
                $salary = $row['salary'];
                ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $address ?></td>
                <td><?php echo $age ?></td>
                <td><?php echo $department ?></td>
                <td><?php echo $salary ?></td>
                <td>
                    <a href="action/delete.php?delete=<?php echo $id; ?>">Delete</a>
                    <a href="update.php?update=<?php echo $id; ?>">Update</a>
                </td>
            </tr>
                <?php
            }

?>
           
        
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>