
<?php 

require_once 'config.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$id = $_POST['id'];

$modif = $bdd->prepare('UPDATE users SET nom=?, prenom=?, email=? WHERE id=? ');
$modif->execute(array($nom, $prenom, $email, $id));
if($modif){
    header("Location:listes.php");
}


/*$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];

$modif = $bdd->prepare('UPDATE users SET nom=?, prenom=?, email=? WHERE email=?');
$modif->execute(array($nom, $prenom, $email, $email));
if($modif){
    header("location:listes.php");
}/*

/*if(isset($_POST['nom']) && $_POST['prenom']) && $_POST['email']) && $_POST['id']))
if(isset($_POST['submit']))
{

    $sql=$bdd->prepare("UPDATE users SET  nom=?, prenom=?, email=? WHERE email=?");
    $data=array($nom, $prenom, $email);
    $sql-> execute($data);
    if($sql){
      
        header("location:listes.php");

    }
    else{
echo"modif echouée"     

    }
}*/


/*$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$id = $_POST['id'];

if(isset($_POST['submit'])){
    $sql=$bdd->prepare("UPDATE users SET nom=?, prenom=?, email=? WHERE identification=$id");
    $data->array($nom, $prenom, $email);
    $sql->execute($data);
    
    if($sql){
        header('Location:liste.php?');
    }else{
        echec;
    }
}/*
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forum";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE users SET nom='$nom' WHERE id=$id";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;*/

?>