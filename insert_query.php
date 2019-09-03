<?php require_once('inc/connection.php'); ?>
<?php 

$ID = 001;
$Name = 'Sachith';
$Password = 'sam94620145@543';
$Age = 25;
$Gender = 'Male';


$hashed_password = sha1($Password);
$hashed_MD5 = md5($hashed_password);

//echo "Hashed password: {$hashed_MD5}";


$query = "INSERT INTO student(ID,Name,Password,Age,Gender)VALUES('{$ID}','{$Name}','{$hashed_MD5}','{$Age}','{$Gender}')";

$result = mysqli_query($connection,$query);

if ($result) {
    echo "1 Record added";
}
else{
    echo "Database query error";
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Query</title>
</head>
<body>
    
</body>
</html>
<?php mysqli_close($connection); ?>