<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define('SITE_ROOT', DS . 'xampp' . DS . 'htdocs' . DS . 'eupa_api');
//xampp/htdocs/eupa_api
defined('INC_PATH') ? null : define('INC_PATH', SITE_ROOT . DS . 'includes');
defined('CORE_PATH') ? null : define('CORE_PATH', SITE_ROOT . DS . 'core');


//load the config file
require_once(INC_PATH . DS . 'config.php');

//core classes
require_once(CORE_PATH . DS . "carousel_slide.php");
require_once(CORE_PATH . DS . "scheduled_game.php");
require_once(CORE_PATH . DS . "featured_article.php");
require_once(CORE_PATH . DS . "team.php");
