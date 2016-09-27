<?php
include('vue/layout/header_BO.php');
?>

<?php
foreach($select_evenements as $select_evenement) {
    ?>
    <div class="form-group col-xs-10">
        <form action="?module=back_office&action=modif_evenements&id=<?php echo $select_evenement['id'];?>&modif" method="post" enctype="multipart/form-data">
            Titre : <input class="form-control" type="text" name="titre" value="<?php echo $select_evenement['titre'];?>">
            Contenu : <textarea class="form-control" name='contenu'><?php echo $select_evenement['contenu']; ?></textarea>
            <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
            <label for="file">Photo</label><input type="file" name="ch_file"/>
            <img src="<?php echo $select_evenement['photo']; ?>" alt="Photo">
    </div>
    <?php
    $date_fin = explode('-', $select_evenement['date_fin']);
    ?>
    <div class="form-group col-xs-2">
    <select class="form-control" name="annee" required>
        <option value="2016" <?php if($date_fin[0]=='2016') echo " selected"; ?>>2016</option>
        <option value="2017" <?php if($date_fin[0]=='2017') echo " selected"; ?>>2017</option>
        <option value="2018" <?php if($date_fin[0]=='2018') echo " selected"; ?>>2018</option>
        <option value="2019" <?php if($date_fin[0]=='2019') echo " selected"; ?>>2019</option>
        <option value="2020" <?php if($date_fin[0]=='2020') echo " selected"; ?>>2020</option>
    </select>
    <select class="form-control" name="mois" required>
        <option value="01" <?php if($date_fin[1]=='01') echo " selected"; ?>>Janvier</option>
        <option value="02" <?php if($date_fin[1]=='02') echo " selected"; ?>>Février</option>
        <option value="03" <?php if($date_fin[1]=='03') echo " selected"; ?>>Mars</option>
        <option value="04" <?php if($date_fin[1]=='04') echo " selected"; ?>>Avril</option>
        <option value="05" <?php if($date_fin[1]=='05') echo " selected"; ?>>Mai</option>
        <option value="06" <?php if($date_fin[1]=='06') echo " selected"; ?>>Juin</option>
        <option value="07" <?php if($date_fin[1]=='07') echo " selected"; ?>>Juillet</option>
        <option value="08" <?php if($date_fin[1]=='08') echo " selected"; ?>>Aout</option>
        <option value="09" <?php if($date_fin[1]=='09') echo " selected"; ?>>Septembre</option>
        <option value="10" <?php if($date_fin[1]=='10') echo " selected"; ?>>Octobre</option>
        <option value="11" <?php if($date_fin[1]=='11') echo " selected"; ?>>Novembre</option>
        <option value="12" <?php if($date_fin[1]=='12') echo " selected"; ?>>Decembre</option>
    </select>
    <select class="form-control" name="jour" required>
        <option value="01" <?php if($date_fin[2]=='01') echo " selected"; ?>>01</option>
        <option value="02" <?php if($date_fin[2]=='02') echo " selected"; ?>>02</option>
        <option value="03" <?php if($date_fin[2]=='03') echo " selected"; ?>>03</option>
        <option value="04" <?php if($date_fin[2]=='04') echo " selected"; ?>>04</option>
        <option value="05" <?php if($date_fin[2]=='05') echo " selected"; ?>>05</option>
        <option value="06" <?php if($date_fin[2]=='06') echo " selected"; ?>>06</option>
        <option value="07" <?php if($date_fin[2]=='07') echo " selected"; ?>>07</option>
        <option value="08" <?php if($date_fin[2]=='08') echo " selected"; ?>>08</option>
        <option value="09" <?php if($date_fin[2]=='09') echo " selected"; ?>>09</option>
        <option value="10" <?php if($date_fin[2]=='10') echo " selected"; ?>>10</option>
        <option value="11" <?php if($date_fin[2]=='11') echo " selected"; ?>>11</option>
        <option value="12" <?php if($date_fin[2]=='12') echo " selected"; ?>>12</option>
        <option value="13" <?php if($date_fin[2]=='13') echo " selected"; ?>>13</option>
        <option value="14" <?php if($date_fin[2]=='14') echo " selected"; ?>>14</option>
        <option value="15" <?php if($date_fin[2]=='15') echo " selected"; ?>>15</option>
        <option value="16" <?php if($date_fin[2]=='16') echo " selected"; ?>>16</option>
        <option value="17" <?php if($date_fin[2]=='17') echo " selected"; ?>>17</option>
        <option value="18" <?php if($date_fin[2]=='18') echo " selected"; ?>>18</option>
        <option value="19" <?php if($date_fin[2]=='19') echo " selected"; ?>>19</option>
        <option value="20" <?php if($date_fin[2]=='20') echo " selected"; ?>>20</option>
        <option value="21" <?php if($date_fin[2]=='21') echo " selected"; ?>>21</option>
        <option value="22" <?php if($date_fin[2]=='22') echo " selected"; ?>>22</option>
        <option value="23" <?php if($date_fin[2]=='23') echo " selected"; ?>>23</option>
        <option value="24" <?php if($date_fin[2]=='24') echo " selected"; ?>>24</option>
        <option value="25" <?php if($date_fin[2]=='25') echo " selected"; ?>>25</option>
        <option value="26" <?php if($date_fin[2]=='26') echo " selected"; ?>>26</option>
        <option value="27" <?php if($date_fin[2]=='27') echo " selected"; ?>>27</option>
        <option value="28" <?php if($date_fin[2]=='28') echo " selected"; ?>>28</option>
        <option value="29" <?php if($date_fin[2]=='29') echo " selected"; ?>>29</option>
        <option value="30" <?php if($date_fin[2]=='30') echo " selected"; ?>>30</option>
        <option value="31" <?php if($date_fin[2]=='31') echo " selected"; ?>>31</option>
    </select><br/>
    <input type="submit" value="Envoyer" class="btn btn-success">
    <?php
}
?>


<?php
include('vue/layout/footer_BO.php');
?>

