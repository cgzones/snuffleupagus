--TEST--
Broken configuration
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) print "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/broken_config_regexp.ini
error_log=/dev/null
--FILE--
<?php
ob_start();
phpinfo();
$info = ob_get_clean();
ob_get_clean();
if (strstr($info, 'Valid config => no') !== FALSE) {
	echo "win";
} else {
	echo "lose";
}
?>
--EXPECTF--
Fatal error: [snuffleupagus][0.0.0.0][config][log] Failed to compile '*.': %a. in Unknown on line 0

Fatal error: [snuffleupagus][0.0.0.0][config][log] Invalid regexp '*.' for '.filename_r()' on line 1 in Unknown on line 0

Fatal error: [snuffleupagus][0.0.0.0][config][log] Invalid configuration file in Unknown on line 0
Could not startup.
