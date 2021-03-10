<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="styles/dev.css">
    <title>Connexion_Dev</title>
</head>
<body>
    

<div class="login-form">
    <form action="forum.php" method="POST">
                <h3 class="text-center">Connexion Développeur</h3>
                   <div class="row">
                       <div class="col-lg-4 offset-lg-4 col-xs-4 offset-xs-4 col-sm-4 offset-sm-4 col-md-4 offset-md-4 mt-5">
                           <img src="images/ICONE.png" alt="" width="130%" height="130px">  
                       </div>
                    </div>     
                <div class="form-group">
                    <input type="email" name="email" class="form-control mt-5" placeholder="Email ou Nom d'utilisteur" required="required" autocomplete="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="">
                </div>
                <div class="formGroup">
                    <button type="submit" class="btn btn-success btn-block">Connexion</button>
                </div>  
            </form>
    </div>



    <script src="javascript/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="javascript/script.js"></script>
    



</body>
</html>