<?php 
/**
*Manag-Develop BolCmS-Suptesat
*Syte- bolcms.cf
*/
@session_start();

$t = microtime(1);

error_reporting(0);

$result = mysql_query("SELECT * FROM `config` WHERE `id` = '1'");
$config = mysql_fetch_assoc($result);

?>
