<?php require_once('inc/connection.php'); ?>

<?php 

$query = "UPDATE student SET Name='Anuradha' WHERE ID= 1";

$result_set = mysqli_query($connection, $query);

if ($result_set) {

    echo mysqli_affected_rows($connection) . "Record updated.";
}

else{
    echo "Database query failed.";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update query</title>
</head>
<body>
    
</body>
</html>
<?php mysqli_close($connection); ?>