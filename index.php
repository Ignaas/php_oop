<?php

require 'functions/file_functions.php';
require 'classes/FileDB.php';

$db = new FileDB('failas.txt');
$db->load();
$db->createTable('successfullycreatedtable');
$db->dropTable('successfullycreatedtable');
$db->insertRow('naujastable', ['content' => 'notcnetnalds;fja', 'adsklfajsdlfajsl;'], 'absoliutus_šlamštas');
var_dump($db);
