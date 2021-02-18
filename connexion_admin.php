
<?php require_once 'config.php';   ?>

<?php 
   session_start();
   
    /*if(isset($_POST['email']) && isset($_POST['password'])){
        $email =htmlspecialchars ($_POST['email']);
        $password =htmlspecialchars ($_POST['password']);
        if(!empty($email) AND !empty($password)){
           $verifyusers = $bdd->query('SELECT id FROM users where email="'.$email.'" AND password="'.$password.'" ');
           $userdata = $verifyusers->fetch();
           if($verifyusers->rowCount()==1){
               $_SESSION['login']=$userdata['id'];
           }else{ header('Location:inscription_admin.php?reg_err=already');
            die();}
        }else{ header('Location:inscription_admin.php?reg_err=already');
            die();}
           
    }*/
     if(isset($_POST['email']) && isset($_POST['password']))
    {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

       if(!empty('$email') AND !empty('$password')){
        $check = $bdd->prepare('SELECT id password FROM users WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                
                if(password_verify($password, $data['password']))
                {
                    $_SESSION['users'] = $data['id'];
                    header('Location:inscription_admin.php?reg_err=success');
                    die();
                }else{ header('Location: index.php?login_err=password'); die(); }
            }else{ header('Location: index.php?login_err=email'); die(); }
        }else{ header('Location: index.php?login_err=already'); die(); }
       }
    }
?>