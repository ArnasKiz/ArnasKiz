<?php
require_once('./classes/Foo.php');
require_once('./classes/Bar.php');

$foo = new Foo();
$bar = new Bar();
$foo->printItem('baz');
$foo->printPHP();
$bar->printItem('baz');
$bar->printPHP();
