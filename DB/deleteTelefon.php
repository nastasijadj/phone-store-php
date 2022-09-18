<?php

require 'DBConnection.php';


$SQL = "delete from telefon where id=" . $_GET['id'];
$connection->query($SQL);

header('Location: ../index.php');
