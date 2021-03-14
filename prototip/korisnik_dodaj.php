<?php
    include 'connection.php';
    include 'sql.php';
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
	        <li><a href="home2.php"><div><button>Natrag</button></div></a></li>
        <ul>
    </nav>


<div class="container">
    

<div class="home-form">
    <p>Dodaj novog zaposlenika</p>
    <form method="POST" action="korisnik_edit.php">
    <input type="hidden" name="id" value="" />
    <label>Ime i prezime:</label><br>
    <input type="text" name="name" placeholder="Ime i prezime zaposlenika"/><br>

    <label>Korisničko ime:</label><br>
    <input type="text" name="username" placeholder="Korisničko ime" /><br>

    <label>Lozinka:</label><br>
    <input type="password" name="password" placeholder="Lozinka" /><br>
    
    <button type="submit" id="btn" name="insert" default>Dodaj</button>
    </form>
<br><br>
</div>
</div>



</body>
</html>