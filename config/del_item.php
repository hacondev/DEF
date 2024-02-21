<?php
require_once 'functions.php';

$del_id = $_POST['del_id'];

del_item($del_id);

header("Location: ../index.php");

?>