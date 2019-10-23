<?php

require 'functions/file_functions.php';
require 'classes/FileDB.php';

$db = new FileDB('failas.txt');
$db->setData(['vaisiai' => ['obuoliai' => 29, 'pasifloras'], 'elektronika' => ['televizorius', 'kompiuteris', 'programines įrangos CD']]);
$db->save();
$db->load();
$db->addRow('guminukai', ['velniai', 'rūgštūs', 'guminukai']);
$db->replaceRow('elektronika', 1, 'nebeveikiantis kompiuteris');
$db->createTable('table?');
var_dump($db);
