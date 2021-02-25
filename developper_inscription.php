<?php //formulaire d'inscription
require_once 'config.php';//Connexion à la base de donnée
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password'])){//


    $nom =htmlspecialchars ($_POST['nom']);
    $prenom = htmlspecialchars( $_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);


    if(!empty($nom) AND !empty($prenom) AND !empty($email) AND !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){//filtrer les emails,empecher les emails bidons
                $cost = ['cost' => 12];
                $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                $TestEmail = $bdd->query('SELECT id from users WHERE email = "'.$email.'"');
                if($TestEmail->rowCount()<1){
                    $bdd->query('INSERT INTO users (nom, prenom, email, password) VALUES ("'.$nom.'", "'.$prenom.'", "'.$email.'", "'.$password.'" )');
                    header('Location:listes.php');
                    die();
                }else {header('Location:ajout_utilisateur.php');
                die();}
        }else{ header('Location:');
        die();}
    }else{ header('');
    die();}
}
?>