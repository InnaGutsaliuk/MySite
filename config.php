<?php
class Core {
    static $CREATED = 2019;
    static $SKIN    = 'default';
    static $CONTROLLER = 'modules';

    static $JS = array();
    static $CSS = array();
    static $META = array(
    	'title' => 'Мой сайт',
		'description' => 'Сайт для практики программирования на php',
		'keywords' => 'обучение, php, программирование, сайт'
	);

	static $DB_NAME     = 'main';
	static $DB_LOGIN    = 'root';
	static $DB_PASSWORD = '';
	static $DB_LOCAL    = 'localhost';

	static $DOMAIN = 'mysite/';

	/*static $DB_NAME = 'innlina';
	static $DB_LOGIN = 'innlina';
	static $DB_PASSWORD = 'z3-U4ebY';
	static $DB_LOCAL = 'localhost';

	static $DOMAIN = 'http://innlina.school-php.com/';*/
}

spl_autoload_register(function ($class) {
    include './libs/class_'.$class.'.php';
});
