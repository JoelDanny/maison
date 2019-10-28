<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <script type="text/javascript" src="js/first.js"></script>
            <script src="js/script.js"></script>
            <title>inscription</title>

    </head>
    <body class="inscription"  style="background-image: url(images/mi3.jpg);background-repeat: no-repeat; background-size: cover;">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3" id="exterieur">
                    <h2>INSCRIPTION</h2>


                
                    <div class="col-sm-12" id="interieur">
                        <h4>Inscrivez-vous</h4>
                        <form id="contact-form" method="POST" action="ajouter.php" role="form">
                            <div class="row">
                                <div class="col-sm-12" style="margin-bottom: 0.5cm;">
                                    <label for="firstname">Prénom<span class="blue"> *</span></label>
                                    <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre Prénom">
                                    
                                </div>

                                <div class="col-sm-12" style="margin-bottom: 0.5cm;">
                                    <label for="name">Nom<span class="blue"> *</span></label>
                                    <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom">
                                    
                                </div>
                                <div class="col-sm-12" style="margin-bottom: 0.5cm;">
                                    <label for="email">Email<span class="blue"> *</span></label>
                                    <input id="email" type="email" name="email" class="form-control" placeholder="Votre Email">
                                    
                                </div>
                                <div class="col-sm-12" style="margin-bottom: 0.5cm;" >
                                    <label for="phone">Téléphone<span class="blue"> *</span></label>
                                    <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone">
                                  
                                </div>
                                <div class="col-sm-12" style="margin-bottom: 0.5cm;">
                                        <label for="pass">Mot De Pass<span class="blue"> *</span></label>
                                        <input id="pass" type="password" name="pass" class="form-control" placeholder="Votre Mot de pass">
                                    
                                </div>
                                <div class="col-sm-12" style="margin-bottom: 0.5cm;">
                                        <label for="pass2">Repetez mot de passe<span class="blue"> *</span></label>
                                        <input id="pass2" type="password" name="pass2" class="form-control" placeholder=" Repetez le Mot de pass">
                                    
                                </div>
                                <div class="col-sm-12">
                                    <p class="blue"><strong>* Ces informations sont requises</strong></p>
                                </div>
                                <div class="col-sm-12">
                                    <input type="submit" class="button1" value="Envoyer">
                                </div>
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div>


    </body>


</html>