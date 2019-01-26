<?php
require_once 'pr_1_var_4.php';

$adress = new MailAdress();
$adress->show();
$adress = null;
if(null == $adress){
  echo 'Fields delet';
}
