<?php require_once('inc/connection.php'); ?>
<?php 


$query = "SELECT * FROM student";

$result_set = mysqli_query($connection,$query);

if ($result_set) {
    
    //echo "Query succsessful";
    echo "<br>";
    echo mysqli_num_rows($result_set). "  Record found. <hr>";

    $table = '<table>';
    $table .= '<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Password</th>
    <th>Age</th>
    <th>Gender</th>
    
    </thr>';

    while ($record = mysqli_fetch_assoc($result_set)) {
        
        //echo $record['Name'] . "<br>";
        $table .= '<tr>';
        $table .='<td>' . $record['ID'] . '</td>' ;
        $table .='<td>' . $record['Name'] . '</td>' ;
        $table .='<td>' . $record['Password'] . '</td>' ;
        $table .='<td>' . $record['Age'] . '</td>' ;
        $table .='<td>' . $record['Gender'] . '</td>' ;
        $table .= '</tr>';


    }
    
    

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select query</title>
    <style>
        table {border-collapse: collapse;}
    td,th {border: 1px solid black; padding: 10px; }
    </style>
</head>
<body>
    <?php echo $table; ?>
</body>
</html>
<?php mysqli_close($connection); ?>