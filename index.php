<?php
 if(isset($_POST['name']))
 {
 $connect=mysqli_connect('localhost','root','','resume');
  $insert=false;
 //check connection
  if(mysqli_connect_errno($connect))
  {
     echo 'Failed to connect to database: '.mysqli_connect_error();
 }
 else
     //echo 'Connected Successfully!!';

    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $date=$_POST['date'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $hobby = $_POST['hobby'];
    $hosteller = $_POST['hosteller'];
    $ref=$_POST['ref'];
    $sgpa1=$_POST['sgpa1'];
    $sgpa2=$_POST['sgpa2'];
    $sgpa3=$_POST['sgpa3'];
    $sgpa4=$_POST['sgpa4'];
    $sgpa5=$_POST['sgpa5'];
    $sgpa6=$_POST['sgpa6'];
    $sgpa7=$_POST['sgpa7'];
    $sgpa8=$_POST['sgpa8'];
    $cgpa=$_POST['cgpa'];
    $address=$_POST['address'];
    $sql = "INSERT INTO `resume`.`resume_table` (`name`, `roll`, `date`, `address`, `mob`, `email`, `hobby`,`hosteller`,`ref`,`sgpa1`,`sgpa2`,`sgpa3`,`sgpa4`,`sgpa5`,`sgpa6`,`sgpa7`,`sgpa8`,`cgpa`)     
    VALUES ('$name', '$roll', '$date', '$address', '$mobile', '$email','$hobby','$hosteller','$ref','$sgpa1','$sgpa2','$sgpa3','$sgpa4','$sgpa5','$sgpa6','$sgpa7','$sgpa8','$cgpa' );";
    // echo $sql;

    // Execute the query
    if($connect->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
        $result='<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Form</strong> Suceesfully submitted.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    else{
        echo "ERROR: $sql <br> $connect->error";
    }

    // Close the database connection
    $connect->close();
 }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel = "stylesheet"
   type = "text/css"
   href = "style.css" />
    <title>Online Resume Maker</title>
  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Resume Manager Nitc</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item active">
            <a class="nav-link" href="search.php">Search Resume<span class="sr-only">(current)</span></a>
          </li>
         
         
        </ul>
      </div>
    </nav>

    
    <div class="box" style="width: 60%;  margin: auto;background-color: yellow" >
      <h3 style="font-style: italic;color: blueviolet;">Welcome to NIT Calicut</h3>
      <h3 style="color:black;">Create your Resume</h3>
      <form action="index.php" method="post">
        <input style="width:50%"type="text" id="name" name="name" placeholder="Enter your name" />
        <input style="width:50%"type="text" id="roll" name="roll" placeholder="Enter your Roll number" />
        <input style="width:50%"type="date" id="date"  name="date" placeholder="Choose date" />
        <textarea name="address" id="address" cols="100" rows="5" 
            placeholder="Address"></textarea>
        <input style="width:50%"type="number" id="mobile" name="mobile" placeholder="Enter your Mobile no" />
        <input type="text" id="email"  name="email" placeholder="Enter your email" />
        <input style="width:20%" type="number" id="sgpa1" step="0.01" name="sgpa1"placeholder="Enter your sgpa1" />
        <input style="width:20%" type="number" id="sgpa2" name="sgpa2" step="0.01" placeholder="Enter your sgpa2" />
        <input style="width:20%" type="number" id="sgpa3" name="sgpa3"  step="0.01" placeholder="Enter your sgpa3" />
        <input style="width:20%" type="number" id="sgpa4" name="sgpa4"step="0.01" placeholder="Enter your sgpa4" />
        <input style="width:20%" type="number" id="sgpa5" name="sgpa5" step="0.01" placeholder="Enter your sgpa5" />
        <input style="width:20%" type="number" id="sgpa6" name="sgpa6" step="0.01" placeholder="Enter your sgpa6" />
        <input style="width:20%" type="number" id="sgpa7"  name="sgpa7" step="0.01" placeholder="Enter your sgpa7" />
        <input style="width:20%" type="number" id="sgpa8"  name="sgpa8" step="0.01" placeholder="Enter your sgpa8" />
        <input style="width:20%" type="number" id="cgpa"  name="cgpa" step="0.01" placeholder="Enter your cgpa" />
        <textarea name="hobby" id="hobby" cols="100" rows="2"
            placeholder="Your Hobbies"></textarea>
        <input style="width:30%"type="text" id="hosteller" name="hosteller" placeholder="Are you hosteller" />
        <textarea name="ref" id="ref" cols="100" rows="5"
            placeholder="References"></textarea>

        <input style="width:20% ; background-color: violet"type="submit" value="submit"/>

      </form>
    </div>
    
  </body>
</html>