<?php session_start();
if(empty($_SESSION['id'])):
header('Location:login.php');
endif;

include 'sql.php'
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/cms.css">
<link rel="stylesheet" href="css/table.css">
    <title>Korespodenti</title>
</head>
<body class="cms">
    <nav class="gtco-nav" role="navigation">
        <div class="logo">Evidencija korespodenata</div>
        <ul class="text-right nav-links">
	        <li><a href="logout_process.php"><div><button>Odjava</button></div></a></li>
            
        <ul>
    </nav>

 
<div class="container">
	<table>
    <h1>Dodaj i uredi podatke o korespodentima<a href="korespodent_dodaj.php"><div><button>Dodaj</button></a></h1>
		<thead>
			<tr>
				<th>Id</th>
				<th>Naziv</th>
				<th></th>
			</tr>
		</thead>
        <tbody>
    <?php
        if($resultCheck2 > 0){
			while($row2 = mysqli_fetch_assoc($result2)){ echo'
			<tr>
                <td>'.$row2["id"].'</td>
                <td>'.$row2["naziv"].'</td>
                <td><a href="korespodent.php?id='.$row2["id"].'">Uredi</a></td>
			</tr>';
            }
        }
    ?>
        </tbody>
    </table>
</div>

</body>
</html>