
<h2 align="center">
  Customer Complaints Services regarding online shopping
  
</h2>
<p align="center">
  
  `Php` `Html` `Css`
  
</p>

## :eyes:Overview

- 



## :scroll:Database connection
```php
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);

if(!$con){
die("connection to this database failed due to" . mysqli_connect_error());
}
else{
echo "Database successfully connected"
}
```
## :scroll:Insertion into database
```php
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
```

## :computer:What our website does?

- [x] Data Validation
- [x] Data Insertion into Database 
- [ ] Data retreival

