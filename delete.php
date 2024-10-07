<?php
require 'database.php';
require 'proses.php';

$database = new Database();
$db = $database->getConnection();

$proses = new Proses($db);

$proses->id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: Missing ID.');
$proses->delete();

header("Location: index.php");
exit;
?>