<?php
namespace app;



class_alias('app\\factory', 'factory');

/**
 *
 */
class factory extends \RD_Obj_Factory {
	# Маркеры для настроек подключения к БД
	private $db_set = [
		'db_new_project'   => 'DB_NEW_PROJECT',
	];
	# Объекты подключений к БД
	private $obj_db             = [];
	# Объекты классов получения данных
	private $obj_class          = [];

	/** Объект модели */
	private static $_object		= null;





	/** Возвращает класс данных (getObj)
	 * @param string $alias Псевдоним загружаемого класса
	 * @param mix ...$args Произвольный набор аргументов добавляемый в конструктор класса
	 */
	final function selection_object($alias, ...$arg) {
		switch ($alias) {
			case 'new_project\main':      # Базовая таблица
				$class_data_name = "\\app\\model\\{$alias}\\data";
				$class_item_name = "\\app\\model\\{$alias}\\item";
				$class = new $class_data_name($this->getDB('db_new_project'), $class_item_name);
				break;
			# Ошибка
			default:
				throw new \Exception("Вызов неопределённого класса данных: " . \get_called_class() . "->{$alias}");
				break;
		}
		return $class;
	}



	/** Возвращает подключение к БД
	 * @param string $alias Псевдоним загружаемого подключения
	 */
	public function getDB($alias) {
		if (!array_key_exists($alias, $this->obj_db)) {
			if (!array_key_exists($alias, $this->db_set)) {
				throw new \Exception("Вызов неопределённого драйвера БД: " . \get_called_class() . "->{$alias}");
			}
			$obj_db = \RD_DB::call($this->db_set[$alias], \registry::call());

			$this->obj_db[$alias] = $obj_db;
		}
		return $this->obj_db[$alias];
	}



/**/
}
