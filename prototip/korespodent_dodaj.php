<?php
    include 'connection.php';
    include 'sql.php';
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
	        <li><a href="home2.php"><div><button>Natrag</button></div></a></li>
        <ul>
    </nav>


<div class="container">
    

<div class="home-form">
    <p>Dodaj novog korespodenta</p>
    <form method="POST" action="korespodent_edit.php">
    <input type="hidden" name="id" value="" />
    <label>Naziv:</label><br>
    <input name="naziv" placeholder="Naziv korespodenta" />
<br>

    <label>Ulica i broj:</label><br>
    <input name="street_num" placeholder="Ulica i broj" />
<br>

    <label>Grad:</label><br>
    <input name="city" placeholder="Grad" />
<br>
    
    <label>Poštanski broj:</label><br>
    <input name="zip-code" placeholder="Poštanski broj" />
<br>

    <label>Država:</label><br>
    <input name="country" placeholder="Država" />
<br>
    
    <button type="submit" id="btn" name="insert" default>Dodaj</button>
    </form>
<br><br>
</div>
</div>



</body>
</html>