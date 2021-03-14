<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/cms.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava</title>
</head>
<body class="cms">

        
    <div class="form">
        <p>Prijava u urudžbeni zapisnik</p>
        <form action="login_process.php" method="POST">
            <input type="text" id="user" name="username" placeholder="Korisničko ime"/><br><br>
            <input type="Password" id="pass" name="password" placeholder="Lozinka"/><br><br>
            <button type="submit" id="btn" name="login" default>Prijava</button>
            <button type="submit" id="btn" name="prijava" default>Prijava kao administrator</button>
        </form>
    </div>


</body>
</html>