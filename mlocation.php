<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8_general_ci">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/first.js"></script>
	<script src="js/script.js"></script>
    <title>location de maison</title>

</head>
<body class="mlocation">
<div class="container-fluid" style="margin-bottom:2cm;" >
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
                    <li><a href="index.php">Accueil</a></li>
			      	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="index.php">Maisons</a>
                      <ul class="dropdown-menu">
                          <li style="border-bottom: 1px solid white;"><a href="">en location</a></li>
                          <li><a href="vente.php">en vente</a></li>
                      </ul>
                      </li>

			      	<li><a href="terrain.php">Terrains</a></li>
			      	<li ><a href="contact.php">contact</a></li>
                      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="login.php">Login</a>
                        <ul class="dropdown-menu">
                            <li style="border-bottom: 1px solid white;"><a href="connexion.php">Se connecter</a></li>
                            <li><a href="inscription.php">S'inscrire</a></li>

                        </ul>
                    
                    </li>
			    </ul>
		    </div> 
		  </div>
</nav>
</div>

<h4 class="titre"> MAISONS EN LOCATION  </h4>

<div class="row">  


      <?php
      require "database.php";
      $db = Database::connect();    
       $statment = $db->query('SELECT id,chambres,descriptio,ville,quartier,prix,image FROM maisonenlocation');
       $i=0;
       while($maisonenlocation = $statment->fetch()){

       $i++; 
        switch ($i){
            case '1':
            echo '<div class="col-sm-3 col-md-3">';
            echo '<div class="thumbnail">';
                 echo '<img src="images/'.$maisonenlocation['image'].'.jpg" alt="" >';
                  echo '<div class="prixlocation">'.$maisonenlocation['prix'].'/sem</div>';
                  echo'<div class="ville">'.$maisonenlocation['ville'].'</div>';
                  echo '<div class="description">'.$maisonenlocation['descriptio'].'</div>';
                 echo '<a href="location.php?id='.$maisonenlocation['id'].'" class="btn btn-success  ">Louez</a>';	
                 echo' <a href="voirmlocation.php?id='.$maisonenlocation['id'].'" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
                 echo '</div>';
                 echo '</div>';
        
        
               
            break;
            case '2':
            echo '<div class="col-sm-3 col-md-3">';
            echo '<div class="thumbnail">';
                 echo '<img src="images/'.$maisonenlocation['image'].'.jpg" alt="" >';
                  echo '<div class="prixlocation">'.$maisonenlocation['prix'].'/sem</div>';
                  echo'<div class="ville">'.$maisonenlocation['ville'].'</div>';
                  echo '<div class="description">'.$maisonenlocation['descriptio'].'</div>';
                 echo '<a href="location.php?id='.$maisonenlocation['id'].'" class="btn btn-success ">Louez</a>';
                 echo' <a href="voirmlocation.php?id='.$maisonenlocation['id'].'" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';	
                 echo '</div>';
                 echo '</div>';
                
            break;
            case '3':
            echo '<div class="col-sm-3 col-md-3">';
            echo '<div class="thumbnail">';
                 echo '<img src="images/'.$maisonenlocation['image'].'.jpg" alt="" >';
                  echo '<div class="prixlocation">'.$maisonenlocation['prix'].'/sem</div>';
                  echo'<div class="ville">'.$maisonenlocation['ville'].'</div>';
                  echo '<div class="description">'.$maisonenlocation['descriptio'].'</div>';
                 echo '<a href="location.php?id='.$maisonenlocation['id'].'" class="btn btn-success ">Louez</a>';
                 echo' <a href="voirmlocation.php?id='.$maisonenlocation['id'].'" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';	
                 echo '</div>';
                 echo '</div>';
                
            break;
            case '4':
            echo '<div class="col-sm-3 col-md-3">';
            echo '<div class="thumbnail">';
                 echo '<img src="images/'.$maisonenlocation['image'].'.jpg" alt="" >';
                  echo '<div class="prixlocation">'.$maisonenlocation['prix'].'/sem</div>';
                  echo'<div class="ville">'.$maisonenlocation['ville'].'</div>';
                  echo '<div class="description">'.$maisonenlocation['descriptio'].'</div>';
                 echo '<a href="location.php?id='.$maisonenlocation['id'].'" class="btn btn-success ">Louez</a>';
                 echo' <a href="voirmlocation.php?id='.$maisonenlocation['id'].'" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';	
                 echo '</div>';
                 echo '</div>';
                
            break;
            case '5':
            echo '</div>';
            echo '<div class="row">';
            echo '<div class="col-sm-3 col-md-3">';
            echo '<div class="thumbnail">';
               echo '<img src="images/'.$maisonenlocation['image'].'.jpg" alt="" >';
                echo '<div class="prixlocation">'.$maisonenlocation['prix'].'/sem</div>';
                echo'<div class="ville">'.$maisonenlocation['ville'].'</div>';
                echo '<div class="description">'.$maisonenlocation['descriptio'].'</div>';
               echo '<a href="location.php?id='.$maisonenlocation['id'].'" class="btn btn-success ">Louez</a>';
               echo' <a href="voirmlocation.php?id='.$maisonenlocation['id'].'" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
               echo '</div>';
               echo '</div>';
                
            break;
            case '6':
            echo '<div class="col-sm-3 col-md-3">';
            echo '<div class="thumbnail">';
                 echo '<img src="images/'.$maisonenlocation['image'].'.jpg" alt="" >';
                  echo '<div class="prixlocation">'.$maisonenlocation['prix'].'/sem</div>';
                  echo'<div class="ville">'.$maisonenlocation['ville'].'</div>';
                  echo '<div class="description">'.$maisonenlocation['descriptio'].'</div>';
                 echo '<a href="location.php?id='.$maisonenlocation['id'].'" class="btn btn-success  ">Louez</a>';
                 echo' <a href="voirmlocation.php?id='.$maisonenlocation['id'].'" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';	
                 echo '</div>';
                 echo '</div>';
                
            break;
            case '7':
            echo '<div class="col-sm-3 col-md-3">';
            echo '<div class="thumbnail">';
                 echo '<img src="images/'.$maisonenlocation['image'].'.jpg" alt="" >';
                  echo '<div class="prixlocation">'.$maisonenlocation['prix'].'/sem</div>';
                  echo'<div class="ville">'.$maisonenlocation['ville'].'</div>';
                  echo '<div class="description">'.$maisonenlocation['descriptio'].'</div>';
                 echo '<a href="location.php?id='.$maisonenlocation['id'].'" class="btn btn-success ">Louez</a>';
                 echo' <a href="voirmlocation.php?id='.$maisonenlocation['id'].'" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';	
                 echo '</div>';
                 echo '</div>';
                
            break;
            case '8':
            echo '<div class="col-sm-3 col-md-3">';
            echo '<div class="thumbnail">';
                 echo '<img src="images/'.$maisonenlocation['image'].'.jpg" alt="" >';
                  echo '<div class="prixlocation">'.$maisonenlocation['prix'].'/sem</div>';
                  echo'<div class="ville">'.$maisonenlocation['ville'].'</div>';
                  echo '<div class="description">'.$maisonenlocation['descriptio'].'</div>';
                 echo '<a href="location.php?id='.$maisonenlocation['id'].'" class="btn btn-success ">Louez</a>';
                 echo' <a href="voirmlocation.php?id='.$maisonenlocation['id'].'" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';	
                 echo '</div>';
                 echo '</div>';
                
            break;
            case '9':
            echo '</div>';
            echo '<div class="row">';
            echo '<div class="col-sm-3 col-md-3">';
            echo '<div class="thumbnail">';
               echo '<img src="images/'.$maisonenlocation['image'].'.jpg" alt="" >';
                echo '<div class="prixlocation">'.$maisonenlocation['prix'].'/sem</div>';
                echo'<div class="ville">'.$maisonenlocation['ville'].'</div>';
                echo '<div class="description">'.$maisonenlocation['descriptio'].'</div>';
               echo '<a href="location.php?id='.$maisonenlocation['id'].'" class="btn btn-success ">Louez</a>';	
               echo' <a href="voirmlocation.php?id='.$maisonenlocation['id'].'" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
               echo '</div>';
               echo '</div>';
                
            break;
            case '10':
            echo '<div class="col-sm-3 col-md-3">';
            echo '<div class="thumbnail">';
                 echo '<img src="images/'.$maisonenlocation['image'].'.jpg" alt="" >';
                  echo '<div class="prixlocation">'.$maisonenlocation['prix'].'/sem</div>';
                  echo'<div class="ville">'.$maisonenlocation['ville'].'</div>';
                  echo '<div class="description">'.$maisonenlocation['descriptio'].'</div>';
                 echo '<a href="location.php?id='.$maisonenlocation['id'].'" class="btn btn-success ">Louez</a>';
                 echo' <a href="voirmlocation.php?id='.$maisonenlocation['id'].'" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';	
                 echo '</div>';
                 echo '</div>';
                
            break;
            case '11':
            echo '<div class="col-sm-3 col-md-3">';
            echo '<div class="thumbnail">';
                 echo '<img src="images/'.$maisonenlocation['image'].'.jpg" alt="" >';
                  echo '<div class="prixlocation">'.$maisonenlocation['prix'].'/sem</div>';
                  echo'<div class="ville">'.$maisonenlocation['ville'].'</div>';
                  echo '<div class="description">'.$maisonenlocation['descriptio'].'</div>';
                 echo '<a href="location.php?id='.$maisonenlocation['id'].'" class="btn btn-success ">Louez</a>';
                 echo' <a href="voirmlocation.php?id='.$maisonenlocation['id'].'" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';	
                 echo '</div>';
                 echo '</div>';
                
            break;
            case '12':
            echo '<div class="col-sm-3 col-md-3">';
            echo '<div class="thumbnail">';
                 echo '<img src="images/'.$maisonenlocation['image'].'.jpg" alt="" >';
                  echo '<div class="prixlocation">'.$maisonenlocation['prix'].'/sem</div>';
                  echo'<div class="ville">'.$maisonenlocation['ville'].'</div>';
                  echo '<div class="description">'.$maisonenlocation['descriptio'].'</div>';
                 echo '<a href="location.php?id='.$maisonenlocation['id'].'" class="btn btn-success ">Louez</a>';	
                 echo' <a href="voirmlocation.php?id='.$maisonenlocation['id'].'" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
                 echo '</div>';
                 echo '</div>';
                
            break;
            case '13':
            echo '</div>';
            echo '<div class="row">';
            echo '<div class="col-sm-3 col-md-3">';
            echo '<div class="thumbnail">';
               echo '<img src="images/'.$maisonenlocation['image'].'.jpg" alt="" >';
                echo '<div class="prixlocation">'.$maisonenlocation['prix'].'/sem</div>';
                echo'<div class="ville">'.$maisonenlocation['ville'].'</div>';
                echo '<div class="description">'.$maisonenlocation['descriptio'].'</div>';
               echo '<a href="location.php?id='.$maisonenlocation['id'].'" class="btn btn-success ">Louez</a>';	
               echo' <a href="voirmlocation.php?id='.$maisonenlocation['id'].'" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
               echo '</div>';
               echo '</div>';
                
            break;
            default :
            echo'';



          
         
        
          
         

            
        }
        
  

       }
       Database::disconnect();
      
      
      ?>
      </div>
    <footer>

<span class="loca">LOCA</span><span class="vente">VENTE</span>
<h5> Vous satisfaire notre metier</h5>
<div class="row">
    <div class="col-md-4 col-sm-4">
            <h3>Suivez-nous</h3>
    </div>


    <div class="col-md-4 col-sm-4">
        <h3>A propos de nous</h3>

        </div>


        <div class="col-md-4 col-sm-4">
                <h3>Contacts</h3>
                <h4>Abobo Sogefiha, pres de l'Hopital Houphouet Boigny</h4>
                <h4><span class="glyphicon glyphicon-phone" style="background-color:#eb4e10;"></span> Telephone:77-83-04-19</h4>

            </div>





</div>
<h6> LOCAVENTE.Tous Droits reservés, Design by locavente </h6>


</footer>

</body>
</html> 