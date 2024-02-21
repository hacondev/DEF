<?php
require_once 'functions.php';

$author = $_POST['author'];
$title 	= $_POST['title'];
$type 	= $_POST['type'];
$id 	= $_POST['id'];

edit_item($title, $author, $type, $id);

header("Location: ../index.php");

?>