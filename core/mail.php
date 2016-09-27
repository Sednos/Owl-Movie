<?php
$mail_user = $_POST['email'];

$prenom = $_POST['display_name'];

$cle = $_POST['cle'];

function envoie_mail($mail_user, $prenom, $cle)
{

    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail_user))

    {

        $passage_ligne = "\r\n";

    } else {

        $passage_ligne = "\n";

    }


    $message_txt = "Bonjour, vous êtes bien inscrit sur Owl Movies.";

    $message_html = '<html><head></head><body><b>Bonjour ' . $prenom . '</b>, vous êtes bien inscrit sur Owl Movies. Pour activer votre compte veuillez <a href="http://gachet.etudiant-eemi.com/perso/Owl_movies/owl_movie/?module=user&action=activer&cle=' . $cle . '">Cliquer ici<br/></a></body></html>';


    $boundary = "-----=" . md5(rand());

    $boundary_alt = "-----=" . md5(rand());



    $sujet = "Bienvenu sur Owl Movies";



    $header = "From: \"Owl_Movies\"<administrateur@owl_movies.com>" . $passage_ligne;

    $header .= "Reply-to: \"Owl Movies\"<" . $mail_user . ">" . $passage_ligne;

    $header .= "MIME-Version: 1.0" . $passage_ligne;

    $header .= "Content-Type: multipart/mixed;" . $passage_ligne . " boundary=\"$boundary\"" . $passage_ligne;



    $message = $passage_ligne . "--" . $boundary . $passage_ligne;

    $message .= "Content-Type: multipart/alternative;" . $passage_ligne . " boundary=\"$boundary_alt\"" . $passage_ligne;

    $message .= $passage_ligne . "--" . $boundary_alt . $passage_ligne;


    $message .= "Content-Type: text/plain; charset=\"utf-8\"" . $passage_ligne;

    $message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;

    $message .= $passage_ligne . $message_txt . $passage_ligne;



    $message .= $passage_ligne . "--" . $boundary_alt . $passage_ligne;




    $message .= "Content-Type: text/html; charset=\"utf-8\"" . $passage_ligne;

    $message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;

    $message .= $passage_ligne . $message_html . $passage_ligne;

    $message .= $passage_ligne . "--" . $boundary_alt . "--" . $passage_ligne;

    $message .= $passage_ligne . "--" . $boundary . $passage_ligne;



    $message .= "Content-Type: image/jpeg; name=\"image.jpg\"" . $passage_ligne;

    $message .= "Content-Transfer-Encoding: base64" . $passage_ligne;

    $message .= "Content-Disposition: attachment; filename=\"image.jpg\"" . $passage_ligne;

    $message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne;


   return mail($mail_user, $sujet, $message, $header);

}
?>