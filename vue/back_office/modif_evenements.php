<?php
include('vue/layout/header_BO.php');
?>

<div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-btn">
          <form action="?action=modif_evenements" method="post" >
              <input type="text" name="recherche" class="form-control" placeholder="Titre de l'évenement">
              <input type="submit"  class="btn btn-default" value="Rechercher">
          </form>
      </span>
    </div>
</div>
<br/>

<table class="table table-bordered">
    <tr>
        <td class="text-warning">Titre</td>
        <td class="text-warning">Supprimer l'évenement</td>
    </tr>

    <?php
    foreach($select_evenements as $select_evenement)
    {
        echo "<tr>";
        echo "<td><a href='?action=modif_evenements&id=".$select_evenement["id"]."'>".$select_evenement['titre']."</a></td>";
        echo "<td><a onclick='return(confirm(\"Etes-vous sûr de vouloir supprimer cette entrée?\"));' href='?action=delete_evenement&id=".$select_evenement["id"]."'>Supprimer ".$select_evenement['titre']."</a></td>";
        echo "</tr>";
        echo "<br/>";
    }
    ?>
</table>
<?php
include('vue/layout/footer_BO.php');
?>

