<?php $con = new mysqli("localhost","root","","miniprojectDB");?>
<?php require_once "process.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <script src="https://ajax-googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <title>Document</title>
    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
        body {font-size:16px;}
        
    </style>
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
                        <a href="index.php" class ="w3-button w3-red" style="transition:0.5s ; "><p>Home</p></a>
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
        <div class ="container">
            <h1 class ="w3-xxxlarge">Edit</h1>
            <h3 class = "w3-xlarge">Info Account</h3>
            <hr class ="w3-round" style="border:5px solid red;width:20% ">
        </div>
        <div class ="container" style ="margin-top:20px">
            <div class ="col-md-6">
                <div class ="text-center">
                    <label for="originalTitle">Original</label>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>
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
            <div class ="col-md-6">
                <div class ="text-center">
                    <Label>Edit</Label>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                            </th>
                        </tr>
                    </thead>
                    <form action="process.php" method="post">
                        <input type="hidden" name ="originalID" value = "<?php echo $id?>">
                        <tr>
                            <td>id :<input type="text" class="form-control" name ="id"></td> 
                        </tr>
                        <tr>
                            <td>Fisrt Name : <input type="text" class ="form-control" name ="firstName"></td>
                        </tr>
                        <tr>
                            <td>Last Name :  <input type="text" class ="form-control" name ="lastName"></td>
                        </tr>
                        <tr>
                            <td>Nick Name :  <input type="text" class ="form-control"name ="nickName"></td>
                        </tr>
                        <tr>
                            <td>Email :  <input type="text" class ="form-control"name ="email"></td>
                        </tr>
                        <tr>
                            <td>Phone :  <input type="text" class ="form-control"name ="phone"></td>
                        </tr>
                        <tr>
                            <td><button type ="submit" class ="btn btn-primary" name ="update" >Save</button></td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </nav>
</body>

</html>