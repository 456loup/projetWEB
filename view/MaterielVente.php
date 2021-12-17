<!DOCTYPE html>

<style> 
<?php include 'MaterielVente.css'; ?>
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body> 

    <h1> Allez , on va sur la page administrateur  </h1>

    <a href="index.php?controller=Admin"> Go To Administrator  </a>


    <form action="index.php"  method="get">

        <h1> Catégorie des articles a selectionner </h1>
        <select name="typeArticle"> 

            <option value="PTR"> imprimante </option>
            <option value="PC" > PC </option>
            <option value="CAS" > Casque </option>
            <option value="" > AFFICHER TOUT  </option>
        </select> 

        <input name="controller" type="submit" value="Home">
    </form>


    <form action="index.php"  method="get">

        <h1> Se Deconnecter  </h1>
        <input name="controller" type="submit" value="Connexion">
    </form>

    <div class="row">


        <div class="col-md-4" id="texte">

            <h1> texte   </h1>
        </div> 

        <div class="col-md-2" id="prix">

            <h1> prix   </h1>
        </div> 


        <div class="col-md-4" id="nomArticle">

            <h1> Photo    </h1>
        </div> 

        <div class="col-md-2" id="nomArticle">

            <h1> Ajouter Article au panier    </h1>
        </div> 

    </div>
    <?php while($row = $searchStmt->fetch() ) { ?>
        <div class="row">
            
            <div class="col-md-4" > <?php echo $row['texte'] ?>  </div> 
            <div class="col-md-2" > <?php echo $row['prix'] ?>  </div> 
            <div class="col-md-4" >  

                <?php

                  $handle = opendir(dirname(realpath(__FILE__))."/../image/");
                  while($file = readdir($handle)){

                    
                    if($file !== '.' && $file !== '..' && $file == $row['nomArticle']){
                        echo " nom fichier " . $file; 
                        ?>  <img src=<?php echo "image/".$file ?> style="width:95%; height:95%" />  <?php 
                    }
                  }
                    
                ?>
            </div> 

            <div class="col-md-2">
                
                  <h2> Ajouter au panier  </h2>
        
            </div>



        </div>
    <?php } ?>




</body> 

</html> 