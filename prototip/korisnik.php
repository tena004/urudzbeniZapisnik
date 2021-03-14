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

<?php
    $pId=$_GET["id"];


$query="SELECT * FROM prijava WHERE id='$pId';";
$result_tim = mysqli_query($conn, $query) or die("database error:". mysqli_error($conn));
$resultCheck_tim = mysqli_num_rows($result_tim);
$row_tim=mysqli_fetch_assoc($result_tim);

?>

<div class="container">
    

<div class="home-form">
    <p>Uredi podatke o zaposleniku</p>
    <form method="POST" action="korisnik_edit.php">
    <input type="hidden" name="id" value="<?php echo $pId; ?>" />
    <label>Ime i prezime:</label><br>
    <input type="text" name="name" placeholder="Ime i prezime" value="<?php echo $row_tim["ime_prezime"]?>"/>
<br>

    <label>Korisničko ime:</label><br>
    <input type="text" name="username" placeholder="Korisničko ime" value="<?php echo $row_tim["username"]?>" />
<br>

    <label>Lozinka:</label><br>
    <input type="password" name="password" placeholder="Cijena" value="<?php echo $row_tim["pwd"]?>">
<br>
    
    <button type="submit" id="btn" name="submit" default>Spremi</button>
    <button type="submit" id="btn" name="delete" default>Izbriši</button>
    </form>
<br><br>


</div>
</div>



</body>
</html>