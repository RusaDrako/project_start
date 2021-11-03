<?php
namespace app\model\_added;



/**
 * @author Петухов Леонид <l.petuhov@okonti.ru>
 */
class data extends \RD_Obj_Data {



	/** Возвращает элемент таблицы по ID или новый элемент */
	public function getByKeyOrNew($id) {
		if (!$id) { return $this->newItem();}
		$sql = "SELECT :col: FROM :tab: WHERE :key: = {$id}";
		$data = $this->select($sql);
		$data = $data->first();
		if (!$data) { $data = $this->newItem(); }
		return $data;
	}



/**/
}
