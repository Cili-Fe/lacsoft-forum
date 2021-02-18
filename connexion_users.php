<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/developpeur.css">
    <title>Document</title>
</head>
<body>
    <div class="login-form">
        <form action="" method="post">
            <h3 class="text-center">
                Connexion développeur
            </h3>
            <div class="row  offset-lg-4 offset-sm-4 offset-xs-4 offset-md-4 ">
                <img src="images/icone.png" class="" alt="" width="100px" height="100px" >
            </div>

            <div class="form-group mt-4 ">
               <div class="form-group ">
                    <input type="password" name="email" class="form-control" placeholder="E-mail ou nom d'utilisateur" required="required" autocomplete="">
                </div>
                <div class="form-group ">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Inscription</button>
                </div>  
                <p class="text-center"><a href="modification_password_admin.php">Avez-vous oubliez votre mot de passe?</a></p>
            </div> 
        </form>
    </div>
</body>
</html>