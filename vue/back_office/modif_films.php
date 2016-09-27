<?php
include('vue/layout/header_BO.php');
?>

<div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-btn">
          <form action="?action=modif_films" method="post">
              <input type="text" name="recherche" class="form-control" placeholder="Titre du film">
              <input type="submit"  class="btn btn-default" value="Rechercher">
          </form>
      </span>
    </div>
</div>
<br/>

<table class="table table-bordered">
    <tr>
        <td class="text-warning">Titre</td>
        <td class="text-warning">Résumé</td>
    </tr>

    <?php
    foreach($select_films as $select_film)
    {
        echo "<tr>";
        echo "<td><a href='?action=modif_films&id=".$select_film["idfilm"]."'>".$select_film['titre']."</a></td>";
        echo "<td><a onclick='return(confirm(\"Etes-vous sûr de vouloir supprimer cette entrée?\"));' href='?action=delete_film&id=".$select_film["idfilm"]."'>Supprimer ".$select_film['titre']."</a></td>";
        echo "</tr>";
        echo "<br/>";
    }
    ?>
</table>
<?php
include('vue/layout/footer_BO.php');
?>

