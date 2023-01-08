<?php
    $con = new mysqli("localhost","root","","miniProjectDB");

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        
        $result = mysqli_query($con,"DELETE from student where sid = '$id'");

        header("location:index.php");
    }   

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];

        $result = mysqli_query($con,"SELECT * from student where sid = '$id'");
        
        if($result->num_rows == 1){
            $row = $result -> fetch_assoc();
            
            $id = $row['sid'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $nickName = $row['nickName'];
            $email = $row['email'];
            $phone = $row['phone'];

            echo $id;
        }
    }

    if(isset($_POST['update'])){
        $originalID = $_POST['originalID'];
        $id = $_POST['id'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $nickName = $_POST['nickName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $result = mysqli_query($con , 
            "UPDATE student 
            set 
            sid = '$id',
            firstName = '$firstName',
            lastName = '$lastName',
            nickName = '$nickName',
            email = '$email',
            phone = '$phone'
            where sid = '$originalID'"
        );
        
        header("location:index.php");
    }
?>