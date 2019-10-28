<?php

    require '../database.php';

    if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }

    $chambresError = $quartierError = $descriptioError = $prixError = $villeError = $imageError = $chambres = $quartier = $descriptio = $prix = $ville = $image = "";

    if(!empty($_POST)) 
    {
        $chambres               = checkInput($_POST['chambres']);
        $descriptio        = checkInput($_POST['descriptio']);
        $prix              = checkInput($_POST['prix']);
        $ville           = checkInput($_POST['ville']);
        $quartier           = checkInput($_POST['quartier']);
        $image              = checkInput($_FILES["image"]["name"]);
        $imagePath          = '../images/'. basename($image);
        $imageExtension     = pathinfo($imagePath,PATHINFO_EXTENSION);
        $isSuccess          = true;
       
        if(empty($chambres)) 
        {
            $chambresError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($descriptio)) 
        {
            $descriptioError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        } 

         if(empty($quartier)) 
        {
            $quartierError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        } 
        if(empty($prix)) 
        {
            $prixError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        } 
         
        if(empty($ville)) 
        {
            $villeError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($image)) // le input file est vide, ce qui signifie que l'image n'a pas ete update
        {
            $isImageUpdated = false;
        }
        else
        {
            $isImageUpdated = true;
            $isUploadSuccess =true;
            if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif" ) 
            {
                $imageError = "Les fichiers autorises sont: .jpg, .jpeg, .png, .gif";
                $isUploadSuccess = false;
            }
            if(file_exists($imagePath)) 
            {
                $imageError = "Le fichier existe deja";
                $isUploadSuccess = false;
            }
            if($_FILES["image"]["size"] > 500000) 
            {
                $imageError = "Le fichier ne doit pas depasser les 500KB";
                $isUploadSuccess = false;
            }
            if($isUploadSuccess) 
            {
                if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) 
                {
                    $imageError = "Il y a eu une erreur lors de l'upload";
                    $isUploadSuccess = false;
                } 
            } 
        }
         
        if (($isSuccess && $isImageUpdated && $isUploadSuccess) || ($isSuccess && !$isImageUpdated)) 
        { 
            $db = Database::connect();
            if($isImageUpdated)
            {
                $statement = $db->prepare("UPDATE maisonenlocation set chambres = ?, quartier = ?, descriptio = ?, prix = ?, ville = ?, image = ? WHERE id = ?");
                $statement->execute(array($chambres,$quartier,$descriptio,$prix,$ville,$image,$id));
            }
            else
            {
                $statement = $db->prepare("UPDATE maisonenlocation  set chambres = ?, quartier = ?, descriptio = ?, prix = ?, ville = ? WHERE id = ?");
                $statement->execute(array($chambres,$quartier,$descriptio,$prix,$ville,$id));
            }
            Database::disconnect();
            header("Location: gerermaisons.php");
        }
        else if($isImageUpdated && !$isUploadSuccess)
        {
            $db = Database::connect();
            $statement = $db->prepare("SELECT * FROM maisonenlocation where id = ?");
            $statement->execute(array($id));
            $item = $statement->fetch();
            $image          = $item['image'];
            Database::disconnect();
           
        }
    }
    else 
    {
        $db = Database::connect();
        $statement = $db->prepare("SELECT * FROM maisonenlocation where id = ?");
        $statement->execute(array($id));
        $item = $statement->fetch();
        $chambres           = $item['chambres'];
        $quartier           = $item['quartier'];
        $descriptio    = $item['descriptio'];
        $prix          = $item['prix'];
        $ville       = $item['ville'];
        $image          = $item['image'];
        Database::disconnect();
    }

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Modifier</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    
    <body>
    
         <div class="container">
            <div class="row">
                 <h1 class="text-center"><strong>Modifier une maison</strong></h1>
                    <br>
                <div class="col-md-6 col-md-offset-3" style="box-shadow: 0 4px 8px 0 rgba(17, 16, 16, 0.2), 0 6px 20px 0 rgba(8, 2, 2, 0.19); padding-top: 0.5cm;">
                    <div class="col-md-6">

                   
                    <form class="form" action="<?php echo 'updatemaison.php?id='.$id;?>" role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="chambres">Chambres:
                            <input type="text" class="form-control" id="chambres" name="chambres" placeholder="chambres" value="<?php echo $chambres;?>">
                            <span class="help-inline"><?php echo $chambresError;?></span>
                        </div>
                         <div class="form-group">
                            <label for="quartier">Quartier:
                            <input type="text" class="form-control" id="quartier" name="quartier" placeholder="quartier" value="<?php echo $quartier;?>">
                            <span class="help-inline"><?php echo $quartierError;?></span>
                        </div>
                        <div class="form-group">
                            <label for="descriptio">description:
                            <input type="text" class="form-control" id="descriptio" name="descriptio" placeholder="descriptio" value="<?php echo $descriptio;?>">
                            <span class="help-inline"><?php echo $descriptioError;?></span>
                        </div>
                        <div class="form-group">
                        <label for="prix">Prix: (en CFA)
                            <input type="number" step="0.01" class="form-control" id="prix" name="prix" placeholder="Prix" value="<?php echo $prix;?>">
                            <span class="help-inline"><?php echo $prixError;?></span>
                        </div>

                        </div>

                        <div class="col-md-6">

                        <div class="form-group">
                            <label for="ville">Ville:
                            <select class="form-control" id="ville" name="ville">
                            
                                <option selected="selected" value="Abidjan"> Abidjan</option>
                                <option value="Bouake"> Bouake </option>

                                <option value="Seguela"> Seguela</option>

                                <option value="Gagnoa"> Gagnoa</option>
                    
                            </select>
                            <span class="help-inline"><?php echo $villeError;?></span>
                        </div>
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <p><?php echo $image;?></p>
                            <label for="image">Sélectionner une nouvelle image:</label>
                            <input type="file" id="image" name="image"> 
                            <span class="help-inline"><?php echo $imageError;?></span>
                        </div>
                        <br>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Modifier</button>
                            <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                       </div>
                   </div>
                    </form>
                </div>
                
            </div>
        </div>   
    </body>
</html>
