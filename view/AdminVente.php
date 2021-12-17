<!DOCTYPE html> 

<h1> MENU POUR AJOUTER UN ARTICLE  </h1>


<form action="index.php" method="get" >

    <h2> Entrez la description du produit  </h2>
    <input name="texte" type="text" value=""> 

    <h2> Type Article   </h2>
    <input name="typearticle" type="text" value="">

    <h2> Entrez sa disponibilite  </h2>
    <input name="truc" type="text" value="">

    <h2> Entrez son prix </h2> 
    <input name="prix" type="text" value=""> 

    <h2> ENTREZ LE NOM DE L IMAGE SITUE DANS LE DOSSIER IMAGE  </h2>
    <input name="nomArticle" type="text" value="">

    <select name="controller">
        <option value="Admin" <?php echo "selected" ?>> admin </option>
    </option> 

    <input type="submit" name="action" value="chargerValeur"> 
</form> 

<h1> Revenir a la page utilisateur  <h1>

<a href="index.php?controller=Home"> Revenir sur la page utilisateur  </a>

</html> 