--TEST--
MongoDB::command()
--SKIPIF--
<?php require dirname(__FILE__) ."/skipif.inc"; ?>
--FILE--
<?php
require dirname(__FILE__) . "/../utils.inc";

$m = mongo("admin");
$db = $m->selectDb("admin");

$status = $db->command(array('serverStatus' => 1));
var_dump($status['ok']);
?>
--EXPECT--
float(1)
