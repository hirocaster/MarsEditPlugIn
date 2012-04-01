#!/usr/bin/env php
<?php
require_once 'HatenaSyntax/HatenaSyntax.php';

$text = file_get_contents('php://stdin', 'r');
$text = HatenaSyntax::render($text);

echo $text;
?>