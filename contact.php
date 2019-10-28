<?php
require 'database.php';

$firstname = $name = $email = $phone = $firstnameError = $nameError = $emailError = $phoneError = $message = $messageError = "";                 
$today=date('Y-m-d h:i:s');

if (!empty($_POST)) {

	$name = verifyInput($_POST['name']);
	$firstname = verifyInput($_POST['firstname']);
	$email = verifyInput($_POST['email']);
    $phone = verifyInput($_POST['phone']);
    $message = verifyInput($_POST['message']);
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

    if (empty($message)) {

        $messageError ="ce champ ne peut pas etre vide";
        $success = false;
        
    }

    if ($success) {
        
    $db = Database::connect();
    $statment = $db->prepare('INSERT INTO contact (nom_contact , prenom_contact, email_contact , telephone  ,message_contact, today) VALUES (?,?,?,?,?,?)');
$statment->execute(array($name,$firstname,$email,$phone,$message,$today));
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
            <title>Contactez-nous</title>

    </head>
    <body class="inscription"  style="background-image: url(images/mi3.jpg);background-repeat: no-repeat; background-size: cover;">

    

            <div class="row">
                <div class="col-sm-6 col-sm-offset-3" id="exterieur">
                    <h2>CONTACT</h2>


                
                    <div class="col-sm-12" id="interieur">
                        <h4>Contactez-nous</h4>
                        <form id="contact-form" method="POST" action="contact.php"  role="form">
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
                               
                                <div class="col-md-12">
							<label for="message">Message<span class="blue"> *</span></label>
							<textarea id="message" name="message" class="form-control" rows="4" placeholder="Votre Message" ><?php echo($message);?></textarea>
							<p class="red"><?php echo($messageError);?></p>
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