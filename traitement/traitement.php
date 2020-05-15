<?php
if (!isset($_POST['envoi']))
{
// formulaire non envoyé
echo '<p>Erreur.</p>';
}
else
{
    
    $mail = (isset($_POST['mail'])?$_POST['mail']:"/// Pas de mail ///");
    $message = (isset($_POST['message'])?$_POST['message']:"/// Pas de message ///");

  echo $_POST['mail'].'<br>'.nl2br($_POST['message']);
}


$servername = "db5000303640.hosting-data.io";
/*$servername = "localhost";*/
$username = "dbu526574";
/*$username = "ericing";*/
$password = "TiS|5+z6";
/*$password = "eric@ing%";*/
$dbase = "dbs296627";
/*$dbase = "portfolio";*/

//On établit la connexion
$conn = new mysqli($servername, $username, $password, $dbase);
            
//On vérifie la connexion
if($conn->connect_error)
{
    die('Erreur : ' .$conn->connect_error);
}

echo 'Connexion réussie';


$sql = "INSERT INTO mail (mail, message) 
VALUES ('".$_POST["mail"]."','".$_POST["message"]."')";

if ($conn->query($sql) === TRUE)
{
    echo "New record created successfully";
} 
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
