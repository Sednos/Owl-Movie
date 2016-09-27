<?php
include('vue/layout/header_BO.php');
?>
<div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-btn">
          <form action="?action=selection_utilisateur" method="post">
            <input type="text" name="recherche" class="form-control" placeholder="login OU mail OU nom OU prenom">
            <input type="submit"  class="btn btn-default" value="Rechercher">
          </form>
      </span>
    </div>
    </div>
<br/>

    <table class="table table-bordered">
        <tr>
            <td class="text-warning">Login</td>
            <td class="text-warning">Nom/Prénom</td>
            <td class="text-warning">Mail</td>
            <td class="text-warning">Supprimer Utilisateur</td>
        </tr>

        <?php
        foreach($utilisateurs as $utilisateur)
        {
            echo "<tr>";
            echo "<td>".$utilisateur['login']."</td>";
            echo "<td>".$utilisateur['display_name']."</td>";
            echo "<td>".$utilisateur['email']."</td>";
            echo "<td><a onclick='return(confirm(\"Etes-vous sûr de vouloir supprimer cette entrée?\"));' href='?action=delete_user&id=".$utilisateur["id"]."'>Supprimer ".$utilisateur['display_name']."</a></td>";
            echo "</tr>";
            echo "<br/>";
        }
        ?>
</table>
<?php
include('vue/layout/footer_BO.php');
?>
