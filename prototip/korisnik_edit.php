<?php
include 'connection.php';



function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['name'];
    $posts[2] = $_POST['username'];
    $posts[3] = $_POST['password'];
    
    
    return $posts;
}

//INSERT
if(isset($_POST['insert']))
{
    $data = getPosts();
    while($row=mysqli_fetch_assoc($result)){
        if($row["username"]==$data[2]){
            die('Korisničko ime već postoji!<br><br><a href="home2.php">Natrag</a>');
        }
    }
    
    $insert_Query = "INSERT INTO prijava(ime_prezime, username, pwd) VALUES ('$data[1]','$data[2]','$data[3]');";
    try{
        $insert_Result = mysqli_query($conn, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
                echo 'Podaci uspješno unešeni!<br><br>
                <a href="home2.php">Natrag</a>';
            }else{
                echo 'Podaci nisu unešeni! Pokušajte ponovo<br><br>
                <a href="home2.php">Natrag</a>';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}

//DELETE
if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM prijava WHERE id ='$data[0]';";
    try{
        $delete_Result = mysqli_query($conn, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
                echo 'Zaposlenik izbrisan!<br><br>
                <a href="home2.php">Natrag</a>';
            }else{
                echo 'Zaposlenik nije izbrisan! Pokušajte ponovo<br><br>
                <a href="home2.php">Natrag</a>';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}

//UPDATE
if(isset($_POST['submit']))
{
    $data = getPosts();
    while($row=mysqli_fetch_assoc($result)){
        if($row["username"]==$data[2]){
            die('Korisničko ime već postoji!<br><br><a href="home2.php">Natrag</a>');
        }
    }
    
    $update_Query = "UPDATE prijava SET ime_prezime='$data[1]', username='$data[2]', pwd='$data[3]' WHERE id='$data[0]';";
    try{
        $update_Result = mysqli_query($conn, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {   
                echo 'Podaci uspješno uređeni!<br><br>
                <a href="home2.php">Natrag</a>'; 
            }else{
                echo 'Neuspješno uređivanje podataka! Pokušajte ponovo<br><br>
                <a href="home2.php">Natrag</a>';
            }
            
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}

