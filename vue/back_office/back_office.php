<?php
include('vue/layout/header_BO.php');
?>
<br/>
<div width="50%">
    <h2><a href="?module=back_office&action=ajouter_film" class="bg-success text-muted">Ajouter Film</a></h2><br/>
    <h2><a href="?module=back_office&action=ajouter_evenement" class="bg-success text-muted">Ajouter Evenement</a></h2><br/>
    <h2><a href="?module=back_office&action=ajouter_categorie" class="bg-success text-muted">Ajouter / Supprimer Catégories</a></h2><br/>
    <h2><a href="?module=back_office&action=selection_utilisateur" class="bg-danger text-muted">Supprimer Utilisateurs</a></h2><br/>
    <h2><a href="?module=back_office&action=modif_films" class="bg-success text-muted">Modifier / Supprimer films</a></h2><br/>
    <h2><a href="?module=back_office&action=modif_evenements" class="bg-success text-muted">Modifier / Supprimer evenements</a></h2>
</div>
<?php
include('vue/layout/footer_BO.php');
?>
