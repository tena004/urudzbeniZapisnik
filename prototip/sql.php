<?php
include 'connection.php';

$sql="SELECT * FROM prijava;";
$result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$resultCheck = mysqli_num_rows($result);

$sql2="SELECT * FROM korespodenti;";
$result2 = mysqli_query($conn, $sql2) or die("database error:". mysqli_error($conn));
$resultCheck2 = mysqli_num_rows($result2);