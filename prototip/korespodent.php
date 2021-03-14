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
	        <li><a href="home1.php"><div><button>Natrag</button></div></a></li>
        <ul>
    </nav>

<?php
    $pId=$_GET["id"];


$query="SELECT * FROM korespodenti WHERE id='$pId';";
$result_tim = mysqli_query($conn, $query) or die("database error:". mysqli_error($conn));
$resultCheck_tim = mysqli_num_rows($result_tim);
$row_tim=mysqli_fetch_assoc($result_tim);

?>

<div class="container">
    
<div class="home-form">
    <p>Uredi podatke o korespodentima</p>
    <form method="POST" action="korespodent_edit.php">
    <input type="hidden" name="id" value="<?php echo $pId; ?>" />
    <label>Naziv:</label><br>
    <input name="naziv" placeholder="Naziv korespodenta" value="<?php echo $row_tim["naziv"]?>"/>
<br>

    <label>Ulica i broj:</label><br>
    <input name="street_num" placeholder="Ulica i broj" value="<?php echo $row_tim["ulica_broj"]?>" />
<br>

    <label>Grad:</label><br>
    <input name="city" placeholder="Grad" value="<?php echo $row_tim["grad"]?>">
<br>
    
    <label>Poštanski broj:</label><br>
    <input name="zip-code" placeholder="Poštanski broj" value="<?php echo $row_tim["postanski_broj"]?>">
<br>

    <label>Država:</label><br>
    <input name="country" placeholder="Država" value="<?php echo $row_tim["drzava"]?>">
<br>
    
    <button type="submit" id="btn" name="submit" default>Spremi</button>
    <button type="submit" id="btn" name="delete" default>Izbriši</button>
    </form>
<br><br>


</div>
</div>



</body>
</html>