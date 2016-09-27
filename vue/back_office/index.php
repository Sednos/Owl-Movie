<?php
include('vue/layout/header_BO.php');
?>
<div class="form-group col-xs-2">
<form action="?module=back_office&action=connexion" method="post">
    <input class="form-control" type="text" name="identifiant" placeholder=" Identifiant" required><br/>
    <input class="form-control" type="password" name="pass" placeholder=" Password" required><br/>
    <input type="submit" value="Connexion" class="btn btn-success">
</form>
</div>
<?php
include('vue/layout/footer_BO.php');
?>
