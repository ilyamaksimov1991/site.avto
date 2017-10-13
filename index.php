<?php
# Подключение кодировки
header("Content-Type:text/html;charset=UTF-8");

require_once("config/config.php"); // подключение конфигурационного файла
require_once("classes/ACore.php"); // подключение ощего абстрактного класса
//require_once("classes/ACore_Admin.php");

# какой клас (шаблон=страницу запрашивается) http://site.ru?option=view
if($_GET['option']) {
    # фильтрация вводимых данных
	$class = trim(strip_tags($_GET['option']));
} else {
    # по умолчанию
	$class = 'main';	
}

# если есть такой файл
if(file_exists("classes/".$class.".php")) {
	///
    # инклюдим файл
	include("classes/".$class.".php");
	# если есть такой класс
	if(class_exists($class)) {
		
		$obj = new $class; // создаем объект
		$obj->get_body(); // выводим страницу
	} else { // если нет такого класса
		exit("<p>Не те данные для входа</p>");
	}
} else { // если нету файла
	exit("<p>Нет такой страницы</p>");
}

?>