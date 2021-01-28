<?php

// verif param
if(!isset($_GET['idx'])){
header('location: index.php?error=1');
}

// value
$index = $_GET['idx'];

echo $index;