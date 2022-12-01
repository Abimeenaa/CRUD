<?php
include "connection.php";
if (isset($_GET['id'])) {
    $Id = $_GET['id'];
    $sql = "DELETE from employee WHERE Id=$Id";
    $result = mysqli_query($connection, $sql);

    header('location:display.php');
}

?>