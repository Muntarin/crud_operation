<?php

require_once './Student.php';
use App\classes\Student;

$student = new Student();
$queryResult=$student->getAllStudentsInfo();


if(isset($_GET['status'])){
    $student->deleteStudentInfo(($_GET['id']));
}

if(isset($_POST['btn'])){
    $queryResult=$student->searchStudentInfoBySearchText();
}
if(isset($_GET['logout'])){
    $login=new Student();
    $login->logout();
}
?>



<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="search.css">
    <title>Table</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light ">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="login.php">Add User</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href=""><?php echo $_SESSION['name'] ; ?></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="?logout=true">Log Out</a>
                        </li>

                    </ul>
                </div>
            </nav> 

            <div class="search-form">
                <form action="" method="post">
                    <table>

                            <div class="form-group">
                            <input type="text" class="form-control mt-5 " name="search_text" name="btn" placeholder="Search Here"/>
                            </div>
                        <input type="submit" name="btn" value="Search " class="mb-5 btn btn-success">



                    </table>
                </form>
            </div>

        </div>
    </div>

    <div class="table-section">
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>Serial No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php while ($student=mysqli_fetch_assoc($queryResult)){?>
        <tbody>
<tr>
    <td><?php echo $student['id'];?></td>
    <td><?php echo $student['name'];?></td>
    <td><?php echo $student['email'];?></td>
    <td><?php echo $student['mobile'];?></td>
    <td><?php echo $student['password'];?></td>
    <td>
        <a href="edit.php?id=<?php echo $student['id']; ?>"><button type="button" class="btn btn-secondary">Edit</button>
        </a>
        <a href="?status=delete&id=<?php echo $student['id']; ?>" onclock=return confirm('Are you sure to delete this!!')"><button type="button" class="btn btn-danger">Delete</button>
        </a>
    </td>

</tr>
        </tbody>
    <?php } ?>
    </table>
    </div>
</div>

