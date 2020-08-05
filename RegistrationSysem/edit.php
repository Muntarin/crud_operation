<?php
require_once './Student.php';
use App\classes\Student;

$student=new Student();
$queryResult=$student->getStudentsInfoById($_GET['id']);
$data=mysqli_fetch_assoc($queryResult);

if(isset($_POST['btn'])){
    $student->updateStudentInfo($_GET['id']);
}

?>
<hr/>
    <a href="index.php">Add Users</a> 
    <a href="view-student.php">View Users</a>
<hr/>

<!Doctype html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Update</title>
</head>
<body>
<div class="main-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center mt-5">
                <div class="reg-banner">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-white bg-danger  " style="width: 25rem;">
                    <div class="card-body">
                        <h5 class="card-title"> Update From Here</h5>
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="name"  name="name" value="<?php echo $data['name']; ?>" class="form-control " id="validationTooltip02" required >
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email"  name="email" value="<?php echo $data['email']; ?>" class="form-control"id="validationTooltip02" required >
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="phone"  name="mobile" value="<?php echo $data['mobile']; ?>" class="form-control"id="validationTooltip02" required >
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password"  name="password"  value="<?php echo $data['password']; ?>" class="form-control"id="validationTooltip02" required >
                            </div>
                            <button type="submit"  name="btn"class="btn btn-primary" > Update </button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



