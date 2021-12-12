--TEST--
skeleton_concat basic test
--FILE--
<?php
var_dump(skeleton_concat("Hello World"));

?>
--EXPECT--
string(16) "Hello World test"
