<?php
if(!isset($_SESSION['user']))
{
    include('vue/back_office/index.php');
}
else
{
    include('vue/back_office/back_office.php');
}