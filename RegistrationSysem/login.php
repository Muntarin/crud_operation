<?php
require_once './Student.php';
use App\classes\Student;
if(isset($_POST['btn'])){
    $login=new Student();
    $login->adminLoginCheck();
}
?>
<!doctype html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <link rel="stylesheet" href="login.css">
    <title>Welcome</title>
</head>
<body>
<section class="login-section">
    <div class="container">
        <div class="card mb-3" style="max-width: 20px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                
                </div>
                <div class="col-md-8 px-5 py-5">
                    <div class="card-body ">
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">

                                    <label >Email</label>
                                    <input type="email" name="email" class="form-control"  id="validationTooltip02" required>

                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" id="validationTooltip02" required>
                                </div>
                                <a href="view-student.php"> <input type="submit" name="btn"  class="btn btn-primary " value="Log In"></a>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="main.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>