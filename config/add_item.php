<?php
require_once 'functions.php';

$author = $_POST['author'];
$title 	= $_POST['title'];
$type 	= $_POST['type'];

add_item($title, $author, $type);

header("Location: ../index.php");

?>