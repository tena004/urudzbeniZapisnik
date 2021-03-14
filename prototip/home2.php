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
    <title>Zaposlenici</title>
</head>
<body class="cms">
    <nav class="gtco-nav" role="navigation">
        <div class="logo">Evidencija zaposlenika</div>
        <ul class="text-right nav-links">
	        <li><a href="logout_process.php"><div><button>Odjava</button></div></a></li>
            
        <ul>
    </nav>

 
<div class="container">
	<table>
    <h1>Dodaj i uredi podatke o zaposlenicima<a href="korisnik_dodaj.php"><div><button>Dodaj</button></a></h1>
		<thead>
			<tr>
				<th>Id</th>
				<th>Ime</th>
				<th></th>
			</tr>
		</thead>
        <tbody>
    <?php
        if($resultCheck > 0){
			while($row = mysqli_fetch_assoc($result)){ echo'
			<tr>
                <td>'.$row["id"].'</td>
                <td>'.$row["ime_prezime"].'</td>
                <td><a href="korisnik.php?id='.$row["id"].'">Uredi</a></td>
			</tr>';
            }
        }
    ?>
        </tbody>
    </table>
</div>

</body>
</html>