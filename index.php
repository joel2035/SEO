<?php
var_dump ($_SERVER);
if ($_SERVER['REQUEST_URI'] === '/') {

  require_once 'Acceuil.php';

} elseif ($_SERVER['REQUEST_URI'] === '/acheter') {
  
  require_once './acheter.php';

}