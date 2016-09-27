<?php
include('vue/layout/header_BO.php');
?>


<form action="?module=back_office&action=ajouter_categories&id=<?php echo $_GET['id']; ?>" method="post">
    <label for="categorie">Ajouter une categorie : </label>
    <select class="form-control" name="cat_id" required>
        <option selected disabled value="">Choisissez une catégorie</option>
        <?php
        foreach ($select_categories as $select_categorie) { ?>
         <option value='<?php echo $select_categorie["cat_id"]; ?>'>
        <?php echo $select_categorie["cat_descr"]; ?>
        </option>
    <?php } ?>
    </select><br/>
    <input id="for"type="submit" value="Ajouter cette catégorie">
</form>

<?php
    if(isset($select))
    {
        ?>
        <br/><table class="table table-bordered">
            <tr>
                <td class="text-warning">Catégorie(s)</td>
            </tr>
        <?php

        foreach($select as $selec)
        {
            echo "<tr>";
            echo "<td>".$selec['cat_descr']."</td>";
            echo "<td><a onclick='return(confirm(\"Etes-vous sûr de vouloir supprimer cette entrée?\"));' href='?action=delete_film_cat&id=".$selec["om_film_idfilm"]."&catid=".$selec["categorie_film_cat_id"]."'>Supprimer ".$selec['cat_descr']."</td></a></td>";
            echo "<tr>";
        }
        ?>
        </table>
        <?php
    }
?>

<?php
include('vue/layout/footer_BO.php');
?>