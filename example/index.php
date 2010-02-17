<?php

// penggunaan sederhana


require '../lib/Template.php';

$tpl = new Template('content.phtml');
$tpl->name = 'Some One';
$tpl->email = 'some@gmail.com';

$layout = new Template('layout.phtml');
$layout->title = 'Something title';
$layout->content = $tpl;

echo $layout;


