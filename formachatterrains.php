<?php
require 'database.php';

$firstname = $name = $email = $phone = $firstnameError = $nameError = $emailError = $phoneError =  "";                 
$today=date('Y-m-d h:i:s');

if (!empty($_POST)) {

	$name = verifyInput($_POST['name']);
	$firstname = verifyInput($_POST['firstname']);
	$email = verifyInput($_POST['email']);
    $phone = verifyInput($_POST['phone']);
    $maisonconcer = verifyInput($_POST['cache']);
    $success = true;

    if (empty($name)) {

        $nameError ="ce champ ne peut pas etre vide";
        $success = false;
        
    }

    if (empty($firstname)) {

        $firstnameError ="ce champ ne peut pas etre vide";
        $success = false;
        
    }

    if (empty($email)) {

        $emailError ="ce champ ne peut pas etre vide";
        $success = false;
        
    }

    if (empty($phone)) {

        $phoneError ="ce champ ne peut pas etre vide";
        $success = false;
        
    }

    if ($success) {
        
    $db = Database::connect();
    $statment = $db->prepare('INSERT INTO acheteurterrains (nom_achterrain, prenom_achterrain, email_achterrain , phone_achterrain , terrains_achterrain , today) VALUES (?,?,?,?,?,?)');
$statment->execute(array($name,$firstname,$email,$phone,$maisonconcer,$today));
Database::disconnect();
header("Location: index.php");
        
    }

	

}




function verifyInput($data) {

      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }



     
      


?>

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

    


<?php
            
                    $id = "";
                    if (!empty($_GET['id'])) {

                        $id = verifier($_GET['id']);
                    }

                    $db = Database::connect();
                    $statment = $db->prepare('SELECT * FROM terrains WHERE id=?');
                    $statment->execute(array($id));
                    $terrains = $statment->fetch();
                    
                    

                    function verifier($valeur){

                        $valeur = trim($valeur);
                        $valeur = stripslashes($valeur);
                        $valeur = htmlspecialchars($valeur);
                        return $valeur;

                    }
                    Database::disconnect();

                    
                    

?>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3" id="exterieur">
                    <h2>ACHETER</h2>


                
                    <div class="col-sm-12" id="interieur">
                        <h4>Acheter un terrain</h4>
                        <form id="contact-form" method="POST" action="formachatterrains.php"  role="form">
                            <div class="row">
                                <div class="col-sm-12" style="margin-bottom: 0.5cm;">
                                    <label for="firstname">Prénom<span class="blue"> *</span></label>
                                    <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre Prénom" value="<?php echo $firstname; ?>" >
                                    <span class="red"> <?php echo $firstnameError; ?>  </span>
                                    
                                </div>

                                <div class="col-sm-12" style="margin-bottom: 0.5cm;">
                                    <label for="name">Nom<span class="blue"> *</span></label>
                                    <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom" value="<?php echo $name; ?>" >
                                    <span class="red"> <?php echo $nameError; ?>  </span>
                                    
                                </div>
                                <div class="col-sm-12" style="margin-bottom: 0.5cm;">
                                    <label for="email">Email<span class="blue"> *</span></label>
                                    <input id="email" type="email" name="email" class="form-control" placeholder="Votre Email" value="<?php echo $email; ?>" >
                                    <span class="red"> <?php echo $emailError; ?>  </span>

                                    
                                </div>
                                <div class="col-sm-12" style="margin-bottom: 0.5cm;" >
                                    <label for="phone">Téléphone<span class="blue"> *</span></label>
                                    <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone" value="<?php echo $phone; ?>"  > 
                                    <span class="red"> <?php echo $phoneError; ?>  </span>
                                  
                                </div>
                                <div class="col-sm-12" style="margin-bottom: 0.5cm;">
                                        <label for="quartier">Quartier<span class="blue"> *</span></label>
                                        <input id="quartier"  name="quartier" class="form-control" disabled="disabled"  value="<?php echo''.$terrains['quartier'] ;  ?>">
                                    
                                </div>
                                <div class="col-sm-12" style="margin-bottom: 0.5cm;">
                                        <label for="ville">Ville<span class="blue"> *</span></label>
                                        <input id="ville"  name="ville" class="form-control" disabled="disabled"  value="<?php echo''.$terrains['ville'] ;  ?>">
                                    
                                 </div>
                                <div class="col-sm-12" style="margin-bottom: 0.5cm;">
                                        <label for="prix">Prix<span class="blue"> *</span></label>
                                        <input id="prix"  name="prix" class="form-control" disabled="disabled"  value="<?php echo''.$terrains['prix'] ;  ?>">
                                    
                                </div>
                                <div class="col-sm-12" style="margin-bottom: 0.5cm;">
                                    <label for="nombre">Superficies<span class="blue"> *</span></label>
                                    <input id="nombre"  name="nombre" class="form-control" disabled="disabled"  value="<?php echo''.$terrains['superficies'] ;  ?>">
                                  </div>  

                                    <div class="col-sm-12" style="margin-bottom: 0.5cm;">
                                    <label for="cache"> <span class="blue"> </span></label>
                                    <input id="cache"  name="cache" class="form-control" type="hidden"  value="<?php echo''.$terrains['id'] ;  ?>">
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