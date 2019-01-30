<?php

require_once("models/User.php");
$user = new User();
$users = $user->getUsers();

//Llamada a la vista
require_once("views/usersView.phtml");

