<?php


namespace App\classes;


class Student
{
    public function saveStudentsInfo(){
        extract($_POST);
        $link=mysqli_connect('localhost','root','','student');
        $sql="INSERT INTO students (name,email,mobile,password) VALUES ('$name','$email','$mobile','$password')";

        if(mysqli_query($link,$sql)){
           return "Success";
        }else{
            die("Query Problem".mysqli_error($link));
        }

    }
    public function getAllStudentsInfo(){
        $link=mysqli_connect('localhost','root','','student');
        $sql=" SELECT * FROM students ";

        if($queryResult=mysqli_query($link,$sql)){
            return $queryResult;
        }else{
            die("Query Problem".mysqli_error($link));
        }

    }
    public function getStudentsInfoById($id){

        $link=mysqli_connect('localhost','root','','student');
        $sql=" SELECT * FROM students WHERE id= '$id'";

        if($queryResult=mysqli_query($link,$sql)){
            return $queryResult;
        }else{
            die("Query Problem".mysqli_error($link));
        }

    }
    public function updateStudentInfo($id){
        
        extract($_POST);
        $link=mysqli_connect('localhost','root','','student');
        $sql=" UPDATE students SET name='$name',email='$email',mobile='$mobile',password='$password' WHERE id='$id'";

        if(mysqli_query($link,$sql)){
           header('Location:view-student.php');
        }else{
            die("Query Problem".mysqli_error($link));
        }

    }
    
     public function deleteStudentInfo($id){
        $link=mysqli_connect('localhost','root','','student');
        $sql="DELETE  FROM students WHERE id='$id'";
        if(mysqli_query($link,$sql)){
            header('Location:view-student.php');
        }
        else{
            die("PROBLEM".mysqli_error($link));
        }
    }

       public function searchStudentInfoBySearchText(){
        extract($_POST);
        $link=mysqli_connect('localhost','root','','students');
        $sql="SELECT * FROM students WHERE name LIKE'%$search_text%' || email LIKE'%$search_text%' || mobile LIKE'%$search_text%' || password LIKE '%search_text%'";

        if($queryResult=mysqli_query($link,$sql)){
            return $queryResult;
        }
        else{
            die("Problem".mysqli_error($link));
        }
    }
     public function adminLoginCheck(){

        extract($_POST);
        $md5Password=md5($password);
        $link=mysqli_connect('localhost','root','','student');
        $sql="SELECT * FROM users WHERE email='$email' && password='$md5Password'";
        if($queryResult=mysqli_query($link,$sql)){
            $student=mysqli_fetch_assoc($queryResult);
            if($student){
                session_start();
                $_SESSION['id']=$student['id'];
                $_SESSION['name']=$student['name'];

                header('Location:view-student.php');
            }
            else{
                header('Location:index.php');
            }

        }
        else{
            die("Problem".mysqli_error($link));
        }
    }

    public function logOut(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);

        header('Location:login.php');
    }

}