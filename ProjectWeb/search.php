<?php
    $con = new mysqli("localhost","root","","miniprojectDB");
    $id ="";
    require_once "process.php";
    if(isset($_POST['textSearch'])){
        $text =$_POST['textSearch'];
        
        $result = mysqli_query($con , "SELECT * from student");

        while($row = $result->fetch_assoc()){
            if($text == $row['sid']){
                $id = $row['sid'];
                break;
            } 
            elseif($text == $row['firstName']){
                $id = $row['sid'];
                break;
            } 
            elseif($text == $row['lastName']){
                $id = $row['sid'];
                break;
            } 
            elseif($text == $row['nickName']){
                $id = $row['sid'];
                break;
            } 
            elseif($text == $row['email']){
                $id = $row['sid'];
                break;
            } 
            elseif($text == $row['phone']){
                $id = $row['sid'];
                break;
            } 
        }
        $result = mysqli_query($con , "SELECT * from student where sid = '$id'");

        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            $id = $row['sid'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $nickName = $row['nickName'];
            $email = $row['email'];
            $phone = $row['phone'];
        }
    }  
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- for css-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax-googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Poppins", sans-serif
        }

        body {
            font-size: 16px;
        }
    </style>
    <!-- don't forget about all link-->
</head>

<body>
<nav class="w3-container w3-top w3-red w3-xlarge w3-padding">
        <div class ="container">
            <div class ="col-md-6">
                <!-- for computer-->
                <div class = "w3-left w3-hide-small">
                    <form action="search.php" method ="POST">
                        <div class = "col-md-3">
                            <label for="searchTitle" style="margin-top:10px">Search</label>
                        </div>
                        <div class = "col-md-8">
                            <input type="text" class ="form-control" style="margin-top:10px; width:100%" id ="searchTitle" name ="textSearch" required placeholder="Enter your searching">
                        </div>
                        <div class = "col-md-1">                    
                            <button type ="submit" class ="form-control" style="margin-top:10px;padding-left:10px;padding-right:30px; transition:0.5s"><img src="images/search-icon.png" alt="searchIcon"></button>
                        </div>
                    </form>
                </div>
                <!-- for phone-->
                <div class = "w3-center w3-hide-large w3-hide-medium">
                    <form action="process.php" method ="POST">
                        <div class = "col-md-3">
                            <label for="searchTitle" style="margin-top:10px">Search</label>
                        </div>
                        <div class = "col-md-8">
                            <input type="text" class ="form-control" style="width:100%" id ="searchTitle" name ="textSearch" required placeholder="Enter your searching">
                        </div>
                        <div class = "col-md-1">                    
                            <button type ="submit" class ="form-control" style="margin-top:10px;padding-left:10px;padding-right:30px; transition:0.5s"><img src="images/search-icon.png" alt="searchIcon"></button>
                        </div>
                    </form>
                </div>

            </div>
            <div class ="col-md-6">
                <div class = "col-md-6">   
                    <div class = "text-center">
                        <a href="index.php" class ="w3-button w3-red" style="transition:0.5s"><p>Home</p></a>
                    </div>
                </div>
                <div class ="col-md-6">
                    <div class ="text-right" style ="margin-right:50px">
                        <span class ="w3-hide-small"style="font-size:40px"><b>Info</b></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <nav class="w3-main" style="margin-top:100px">
        <div class ="container w3-hide-small">
            <img src="images/search-icon.png" alt="" style="width:30%">
        </div>
        <!-- for phone-->
        <div class ="container w3-hide-large w3-hide-medium" style="margin-top:180px;">
            <img class = "w3-center-padding"src="images/search-icon.png" alt="" style="width:40%">
        </div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            <h1>Info Student ID : <?php echo $id ?></h1>
                        </th>
                    </tr>
                </thead>
                <tr>

                    <td>ID &emsp;&emsp; &emsp; &ensp; &nbsp;: <?php echo $id; ?></td>
                </tr>
                <tr>
                    <td>Fisrt Name : <?php echo $firstName; ?></td>
                </tr>
                <tr>
                    <td>Last Name : <?php echo $lastName; ?></td>
                </tr>
                <tr>
                    <td>Nick Name : <?php echo $nickName; ?></td>
                </tr>
                <tr>
                    <td>Email : <?php echo $email; ?></td>
                </tr>
                <tr>
                    <td>Phone Name : <?php echo $phone; ?></td>
                </tr>
            </table>
        
       
        </div>
    </nav>
</body>

</html>