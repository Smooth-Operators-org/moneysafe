<?php
require_once 'includes/database.php';


$promo=$_POST['promo'];

header("Location: index.php?promo=$promo");

?>