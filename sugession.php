<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="js/first.js"></script>
	<script src="js/script.js"></script>
    <title>Suggestion d'utilisateur</title>
    </head>
</html>
<body  style="background-image: url(../images/bg5.jpg);background-repeat: no-repeat; background-size: cover;">
    <div class="container-fluid">
            <nav class="navbar navbar-inverse navbar-fixed-top couleur ">
              <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                      </button>
                      <a class="navbar-brand" href="#"><span class="loca">LOCA</span><span class="vente">VENTE</span></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav"> 
                     
                        <li><a href="accueil.php">Accueil</a></li>
                          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="index.php">Gestion</a>
                          <ul class="dropdown-menu">
                              <li style="border-bottom: 1px solid white;"><a href="gerermaisons.php">Maisons</a></li>
                              <li><a href="gererterrains.php">Terrains</a></li>
                          </ul>
                          </li>
    
                          <li><a href="listeacheteurterrain.php">Acheteur Terrains</a></li>
                          <li ><a href="listeacheteurmaison.php">Acheteur Maissons</a></li>
                          <li><a href="listelocatairemaison.php">Locataire Maisons</a></li>
                          <li><a href="sugession.php">Suggestion</a></li>
                          <li><a href="utilisateur.php">Utilisateurs</a></li>
                    </ul>
                </div> 
              </div>
            </nav>
        </div>
            
    <div class="container" style="margin-top:2cm; background-color:white;"> 
        <div class="row">
            
        </div>

 
        <table class="table table-striped table-bordered" border="3">
            <thead>
                <tr>
                    <th> Nom </th>
                    <th> Prenom </th>
                    <th> Email </th>
                    <th> Telephone</th>
                    <th> Message </th>
                    <th> Date de location </th>
    


                </tr>
                
            
            </thead>
            <tbody>

                <?php
                require'../database.php';
                $db= Database::connect();
                $statment = $db->query('SELECT * FROM contact');
                while($contact = $statment->fetch()){

                   echo' <tr>';
                   echo' <td>'.$contact['nom_contact'].'</td>';
                   echo' <td>'.$contact['prenom_contact'].'</td>';
                   echo' <td>'.$contact['email_contact'].'</td>';
                   echo' <td>'.$contact['telephone'].'</td>';
                   echo' <td>'.$contact['message_contact'].'</td>';
                   echo' <td>'.$contact['today'].'</td>';

               echo' </tr>';


                }
                
                Database::disconnect();
                ?>
               
            </tbody>

        
        </table>
    </div>


</body>