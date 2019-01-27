<?php

$db = new PDO('mysql:host=localhost;dbname=TP_POO_PHP', 'root', '');
$manager = new NewsManager($db);