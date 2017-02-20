<?php
define("APPLICATION_PATH", realpath(dirname(__FILE__) . '/../'));
(new Yaf_Application ( APPLICATION_PATH . '/conf/application.ini' ))->bootstrap ();


