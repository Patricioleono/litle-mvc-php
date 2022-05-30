<?php
//llamada al modelo
require_once("models/beer_model.php");
$beer = new beer_model();
$datos = $beer->get_beer();

//llamada a la vista
require_once("views/beer_view.php");

?>