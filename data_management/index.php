<?php

$text = 'PHP is a very useful lenguage, año 2021, programación';

// echo strtolower($text);
// echo strtoupper($text);
// echo ucfirst(strtolower($text));
// echo lcfirst(strtoupper($text));

// echo strtolower(str_replace(' ', '-', $text));
// echo strtolower(str_replace('PHP', 'javascript', $text));

$password = 69;

// echo str_pad($password, 8, '#', STR_PAD_BOTH);

// echo strip_tags($text);
echo mb_strtoupper($text);
