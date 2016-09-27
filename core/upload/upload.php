<?php
/**
 * @param $dossier
 * @return string
 */
    //Trouver l'extension de l'image

function upload_image($dossier)
{

    $ext = array('jpg', 'png', 'jpeg', 'gif');
    $ext_upload = strtolower(substr(strrchr($_FILES['ch_file']['name'], '.'), 1));
    if (!in_array($ext_upload, $ext))
    {
        echo "Cette extension n'est  pas autorisee<br/>";
    }
    else
    {
        //Trouver taille (l/h) image
        $size = getimagesize($_FILES['ch_file']['tmp_name']);

        //Déplacer l'image

       $result = $dossier."/" . md5(uniqid(mt_rand(), true)) . "." . $ext_upload;

        if (!move_uploaded_file($_FILES['ch_file']['tmp_name'], $result))
        {
            return false;
        }
        else
        {

            //Resize et compresser l'image

            if ($ext_upload == 'jpeg' || $ext_upload == "jpg")
            {
                $image = ImageCreateFromJPEG($result);
            }
            else if ($ext_upload == 'png')
            {
                $image = ImageCreateFromPNG($result);
            }
            else if ($ext_upload == 'gif')
            {
                $image = ImageCreateFromGIF($result);
            }

            $width = imagesx($image);
            $height = imagesy($image);

            if ($width > $height)
            {
                $new_width = 250;
                $new_height = ($new_width * $height) / $width;
            }
            else
            {
                $new_height = 400;
                $new_width = ($new_height * $width) / $height;
            }
            $thumb = imagecreatetruecolor($new_width, $new_height);
            imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

            if ($ext_upload == 'jpeg' || $ext_upload == "jpg")
            {
                imageJPEG($thumb, $result);
            }
            else if ($ext_upload == 'png')
            {
                imagePNG($thumb, $result);
            }
            else if ($ext_upload == 'gif')
            {
                imageGIF($thumb, $result);
            }
            //chmod($result, 0777);
            imagedestroy($image);
        }
        return $result;
    }
}
?>