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
        <title>Voir plus</title>
    </head>
    <body style="background-image: url(../images/bg3.jpg);background-repeat: no-repeat; background-size: cover;">
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

                    <?php
                    require '../database.php';
                    if (!empty($_GET['id'])) {

                        $id = verifier($_GET['id']);
                    }

                    $db = Database::connect();
                    $statment = $db->prepare('SELECT * FROM terrains WHERE id=?');
                    $statment->execute(array($id));
                   
                    $terrains= $statment->fetch();
                    Database::disconnect();
                    

                    function verifier($valeur){

                        $valeur = trim($valeur);
                        $valeur = stripslashes($valeur);
                        $valeur = htmlspecialchars($valeur);
                        return $valeur;

                    }
                    
                    
                    
                    ?>

                    <div class="row" style="margin-top:3cm;" >
                    <div class="col-sm-6 col-sm-offset-3" style="background-color:white; padding-left: 2cm; padding-right: 2cm; padding-top: 1cm;  border-radius: 20px;">

                        <div class="col-sm-6" style="padding-top:1cm;">
                            <form >
                                <div class="form-group">
                                    <label>Descripton: </label> <?php echo''.$terrains['descriptio'] ;  ?> <br><br>
                                    <label>Superficies: </label> <?php echo''.$terrains['superficies'] ;  ?><br>
                                    <label>Ville: </label> <?php echo''.$terrains['ville'] ;  ?><br>
                                    <label>Quartier: </label> <?php echo''.$terrains['quartier'] ;  ?><br>
                                    <label>Prix: </label> <?php echo''.$terrains['prix'] ;  ?> Fcfa

                                </div>
                            </form>

                        </div>

                        <div class="col-sm-6">
                            <?php
                                
                                echo '<div class="thumbnail" style="background-color:burlywood"; >';
                                        echo '<img src="../images/'.$terrains['images'].'.jpg" alt="" >';
                                         echo '<div class="prixlocation">'.$terrains['prix'].'/sem</div>';
                                         echo '<div class="description">'.$terrains['descriptio'].'</div>';
                                        echo '</div>';
                                        echo '</div>';
                                 ?>
                                       
                            </div>
                                     

                        </div>
                    </div>

                    </div>

    </body>
</html>