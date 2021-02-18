<?php //formulaire d'inscription
require_once 'config.php';//Connexion à la base de donnée
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype'])){//


    $nom =htmlspecialchars ($_POST['nom']);
    $prenom = htmlspecialchars( $_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);


    if(!empty($nom) AND !empty($prenom) AND !empty($email) AND !empty($password) AND !empty($password_retype)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){//filtrer les emails,empecher les emails bidons
            if($password == $password_retype){//verifier si les 2 mots se correspondent
                $cost = ['cost' => 12];
                $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                $TestEmail = $bdd->query('SELECT id from admin WHERE email = "'.$email.'"');
                if($TestEmail->rowCount()<1){
                    $bdd->query('INSERT INTO admin (nom, prenom, email, password) VALUES ("'.$nom.'", "'.$prenom.'", "'.$email.'", "'.$password.'" )');
                    header('Location:inscription_admin.php?reg_err=success');
                    die();
                }else {header('Location:inscription_admin.php?reg_err=email');
                die();}
            }else { header('Location:inscription_admin.php?reg_err=password');
            die();}
        }else{ header('Location:inscription_admin.php?reg_err=email');
        die();}
    }else{ header('Location:inscription_admin.php?reg_err=already');
    die();}
}
?>