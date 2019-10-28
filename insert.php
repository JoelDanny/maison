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
        <title>Ajouter</title>
    </head>
    <body style="background-image: url(../images/bg3.jpg);background-repeat: no-repeat; background-size: cover;">
                   

                    <div class="row" style="margin-top:3cm;" >
                    <div class="col-sm-6 col-sm-offset-3" style="background-color:white; padding-left: 2cm; padding-right: 2cm; padding-top: 1cm;  border-radius: 20px;">
                    <form id="contact-form" method="POST" action="ajouter.php" role="form" enctype="multipart/form-data">

                            <div class="row">

                                <div class="col-sm-12" style="margin-bottom: 0.5cm;">
                                    <label for="description">Description<span class="blue"> *</span></label>
                                    <input id="description" type="text" name="description" class="form-control" placeholder="">
                                    
                                </div>

                                <div class="col-sm-12" style="margin-bottom: 0.5cm;">
                                    <label for="prix">Prix<span class="blue"> *</span></label>
                                    <input id="prix" type="number" name="prix" class="form-control" placeholder="">
                                    
                                </div>
                                <div class="col-sm-12" style="margin-bottom: 0.5cm;">
                                    <label for="quartier">Quartier<span class="blue"> *</span></label>
                                    <input id="quartier" type="text" name="quartier" class="form-control" placeholder="">
                                    
                                </div>
                                <div class="col-sm-12" style="margin-bottom: 0.5cm;" >
                                    <label for="ville">Ville<span class="blue"> *</span></label>
                                    <input id="ville" type="tel" name="ville" class="form-control" placeholder="">
                                  
                                </div>
                                <div class="col-sm-12" style="margin-bottom: 0.5cm;">
                                        <label for="chambres">Chambres<span class="blue"> *</span></label>
                                        <input id="chambres" type="number" name="chambres" class="form-control" placeholder="">
                                    
                                </div>

                                <div class="col-sm-12" style="margin-bottom: 0.5cm;">
                                        <label for="images">Selectionnez une image<span class="blue"> *</span></label>
                                        <input id="images" type="file" name="images" class="form-control" placeholder="">
                                    
                                </div>
                               
                               
                                <div class="col-sm-12">
                                    <p class="blue"><strong>* Ces informations sont requises</strong></p>
                                </div>
                                <div class="col-sm-12">
                                    <input type="submit" class="button1" value="Ajouter">
                                </div>
                            </div>
                      
                    </div>

                    </div>

    </body>
</html>