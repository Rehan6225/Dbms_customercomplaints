<?php
$insert=false;  
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);

if(!$con){
die("connection to this database failed due to" . mysqli_connect_error());
}


//echo "DATA STORED";
$name=$_POST['name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];



$sql="INSERT INTO `student_details`.`users` (`name`, `gender`, `email`, `tel`, `desc`)
VALUES ('$name', '$gender', '$email', '$phone', '$desc');";
//echo $sql;

if($con->query($sql)==true){
    //echo"successfully inserted";
    $insert=true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container">
        <h3>Welcome to Customer Complaints Services regarding online shopping</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>
        <?php
        if($insert==true){
        echo "<p class='submitmsg'style='color: green; font-size: 24px;'>
        Thanks for submitting your form. We will contact you shortly</p>";
        }
        ?>
        
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>
