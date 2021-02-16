<?php

#Need to replace the pathing of cronjobs
# 1. emailer - initial_application.php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
//defined('SITE_ROOT') ? null : define('SITE_ROOT', DS . 'var'.DS.'www'.DS.'html'.DS.'application');
//defined('HOMEMAIN') ? null : define('HOMEMAIN', 'https://ifwdph.dost.gov.ph/application');

defined('SITE_ROOT') ? null : define('SITE_ROOT', DS . 'xampp'.DS.'htdocs'.DS.'flames');
defined('HOMEMAIN') ? null : define('HOMEMAIN', 'http://localhost/flames');


date_default_timezone_set('Asia/Singapore');

?>   