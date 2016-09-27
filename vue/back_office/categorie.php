<?php
include('vue/layout/header_BO.php');
?>
<div class="form-group col-xs-2">
    <form action="?module=back_office&action=ajouter_categorie" method="post">
        <input class="form-control" type="text" name="cat_descr" placeholder=" Catégorie" required><br/>
        <input type="submit" value="Envoyer" class="btn btn-success">
    </form>
</div>
<table class="table table-bordered">
<tr>
    <td class="text-warning">Catégorie</td>
    <td class="text-warning">Supprimer catégorie</td>
</tr>
<?php
if(isset($select_categories))
{
    foreach($select_categories as $select_categorie)
    {
        echo "<tr>";
        echo "<td>".$select_categorie['cat_descr']."</td>";
        echo "<td><a onclick='return(confirm(\"Etes-vous sûr de vouloir supprimer cette entrée?\"));' href='?action=delete_categorie&id=".$select_categorie["cat_id"]."'>Supprimer ".$select_categorie['cat_descr']."</a></td>";
        echo "</tr>";
    }
}
?>
</table>
<?php
include('vue/layout/footer_BO.php');
?>
