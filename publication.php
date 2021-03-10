<?php
require_once 'config.php';
?>
<?php
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['categories']) && isset($_POST['technos']) && isset($_POST['message']))
{
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $categories = htmlspecialchars($_POST['categories']);
    $technos = htmlspecialchars($_POST['technos']);
    $message = htmlspecialchars($_POST['message']);

                  
    $insert = $bdd->prepare('INSERT INTO publication(nom, prenom,categories, technos, message) VALUES(:nom, :prenom,:categories, :technos, :message)');             
    $insert->execute(array(                  
        'nom' => $nom,               
        'prenom' => $prenom,               
        'categories' => $categories,
        'technos' => $technos,
        'message' => $message
                        ));                   
}


?>

<!-- <?php


// var_dump($_POST);
 // $check = $bdd->prepare('SELECT nom, prenom,categories,technos,message  FROM questions WHERE prenom = ?');
    // $check->execute(array($prenom));
    // $data = $check->fetch();
    // $row = $check->rowCount();


    // connexion à la base de donnée forum

//     $bdd = new PDO("mysql:host=localhost;dbname=forum;charset=utf8", "root", "");

//    $nom = $_POST['nom'];
//    $prenom = $_POST['prenom'];
//    $categories = $_POST['categories'];
//    $technos = $_POST['technos'];
//    $message = $_POST['message'];
    // Préparation de la requête d'insertion (SQL)
    // $insert = $bdd->prepare('INSERT INTO questions(nom, prenom,categories, technos, message) VALUES(NULL, :nom, :prenom,:categories, :technos, :message)');             

    // //On relie les marqueurs à une valeur
    // $insert->bindValue(':nom', $nom, PDO::PARAM_STR);
    // $insert->bindValue(':prenom',  $prenom, PDO::PARAM_STR);
    // $insert->bindValue(':categories',  $categories, PDO::PARAM_STR);
    // $insert->bindValue(':technos',  $technos, PDO::PARAM_STR);
    // $insert->bindValue(':message',  $message, PDO::PARAM_STR);

    //Execution de la requête préparée
    // $insertIsOk = $insert->execute();

    // if($insertIsOk){
    //     $message ='Le contact a été ajouté dans la base de donnée';
    // }else
    // {
    //     $message ='Echec de l\insertion';
    // }
    ?> -->