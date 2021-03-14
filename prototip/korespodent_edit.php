<?php
include 'connection.php';



function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['naziv'];
    $posts[2] = $_POST['street_num'];
    $posts[3] = $_POST['zip-code'];
    $posts[4] = $_POST['city'];
    $posts[5] = $_POST['country'];
    
    
    return $posts;
}

//INSERT
if(isset($_POST['insert']))
{
    $data = getPosts();
    if($data[5]==''){
        $data[5]='Hrvatska';
    }
    $insert_Query = "INSERT INTO korespodenti(naziv, ulica_broj, postanski_broj, grad, drzava) VALUES ('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]');";
    try{
        $insert_Result = mysqli_query($conn, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
                echo 'Podaci uspješno unešeni!<br><br>
                <a href="home1.php">Natrag</a>';
            }else{
                echo 'Podaci nisu unešeni! Pokušajte ponovo<br><br>
                <a href="home1.php">Natrag</a>';
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
    $delete_Query = "DELETE FROM korespodenti WHERE id ='$data[0]';";
    try{
        $delete_Result = mysqli_query($conn, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
                echo 'Korespodent izbrisan!<br><br>
                <a href="home1.php">Natrag</a>';
            }else{
                echo 'Korespodent nije izbrisan! Pokušajte ponovo<br><br>
                <a href="home1.php">Natrag</a>';
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
    if($data[5]==''){
        $data[5]='Hrvatska';
    }
    $update_Query = "UPDATE korespodenti SET naziv='$data[1]', ulica_broj='$data[2]', postanski_broj='$data[3]', grad='$data[4]', drzava='$data[5]' WHERE id='$data[0]';";
    try{
        $update_Result = mysqli_query($conn, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {   
                echo 'Podaci uspješno uređeni!<br><br>
                <a href="home1.php">Natrag</a>'; 
            }else{
                echo 'Neuspješno uređivanje podataka! Pokušajte ponovo<br><br>
                <a href="home1.php">Natrag</a>';
            }
            
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}

