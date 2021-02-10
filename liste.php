<?php

// verif param
if(!isset($_GET['idx'])){
header('location: index.php?error=1');
}

// value
$idx = $_GET['idx'];

$classe = $_GET['tab'];

echo $classe[0];