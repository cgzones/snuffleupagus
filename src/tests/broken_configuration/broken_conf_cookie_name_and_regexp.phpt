--TEST--
Broken configuration - encrypted cookie with name and regexp
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) print "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/broken_conf_cookie_name_and_regexp.ini
error_log=/dev/null
--FILE--
--EXPECT--
Fatal error: [snuffleupagus][0.0.0.0][config][log] name and name_r are mutually exclusive on line 2 in Unknown on line 0

Fatal error: [snuffleupagus][0.0.0.0][config][log] Invalid configuration file in Unknown on line 0
Could not startup.
