<?php

require_once './Student.php';
use App\classes\Student;
$message= ' ';
if(isset($_POST['btn'])) {
    $student = new Student();
    $message=$student->saveStudentsInfo();
}
?>
<hr/>
    <a href="index.php">Add Users</a> 
    <a href="view-student.php">View Users</a>
<hr/>
<h2><?php echo $message; ?></h2>
<!DOCTYPE html>
<html>
<head>
    <title>Login System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="loginbox">
        <img src="image/icon.jpg" class="icon"> 

        <h1>Add User Here</h1>
        <form action="" method="POST">
            <p>Name</p>
            <input type="text" name=" name" placeholder="Enter Name">
            <p>Mobile</p>
            <input type="phone" name=" mobile" placeholder="Enter Number">
            <p>Email</p>
            <input type="email" name=" email" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <p></p>
            <input type="submit" name="btn" value="Submit">

        </form>
    
    </div>
</body>
</html>