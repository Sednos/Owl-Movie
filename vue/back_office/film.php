<?php
include('vue/layout/header_BO.php');
?>

<form action="?module=back_office&action=ajouter_film" method="post" enctype="multipart/form-data">
    <div class="form-group col-xs-10">
        <input class="form-control" type="text" name="titre" placeholder=" Titre" required><br/>
        <textarea class="form-control" rows="5" type="text" name="resume" placeholder=" Resumé" required></textarea><br/>
        <input class="form-control" type="text" name="acteur" placeholder=" Acteur, ..." required><br/>
        <input class="form-control" type="text" name="realisateur" placeholder=" Réalisateur, ..." required><br/>
        <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
        <label for="file">Affiche</label><input type="file" name="ch_file"/>
    </div>

    <div class="form-group col-xs-2">
        <select class="form-control" name="annee" required>
            <option value="2016" selected>2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
        </select>
        <select class="form-control" name="mois" required>
            <option value="01" selected>Janvier</option>
            <option value="02">Février</option>
            <option value="03">Mars</option>
            <option value="04">Avril</option>
            <option value="05">Mai</option>
            <option value="06">Juin</option>
            <option value="07">Juillet</option>
            <option value="08">Aout</option>
            <option value="09">Septembre</option>
            <option value="10">Octobre</option>
            <option value="11">Novembre</option>
            <option value="12">Decembre</option>
        </select>
        <select class="form-control" name="jour" required>
            <option value="01" selected>01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select><br/>
    <input type="submit" value="Envoyer" class="btn btn-success">
    <br/>
</form>
</div>



<?php
include('vue/layout/footer_BO.php');
?>
