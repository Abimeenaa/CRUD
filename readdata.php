<?php
// $connection = mysqli_connect('localhost','root','','registration_web');
$connection = mysqli_connect('localhost', 'root', '', 'registration_web');
if (!$connection) {
    die("OOPS!! CONNECTION FAILED!" . mysqli_connect_error());
}
echo "CONNECTED SUCCESSFULLY!<br>";
$query = "SELECT * FROM customerdata";
//$query = "SELECT * FROM signup";
$result = mysqli_query($connection, $query);

//while($row = mysqli_fetch_all($result)){
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo "<pre>";
print_r($row);
echo "</pre>";
//echo "NAME:".$row[0] ."<br>";
//echo "AGE:".$row[1]. "<br>";
//echo "PASSWORD:".$row[2]. "<br>";
//print_r ($row);
//}
// another approach
if (!$result) {
    die("Query failed" . mysqli_error($connection));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign-up</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color:lavender;">
    <div class="container-fluid">
        <div class="col-sm-10">