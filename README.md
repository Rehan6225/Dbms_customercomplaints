
<h2 align="center">
  Customer Complaints Services regarding online shopping
</h2>


## :eyes:About

- 


## :scroll:Programming Language



`php`

## Database connection
```
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);

if(!$con){
die("connection to this database failed due to" . mysqli_connect_error());
}
else{
Database successfully connected
}
```
## Insertion into database
```
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

