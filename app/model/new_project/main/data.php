<?php
namespace app\model\new_project\main;

/**
 * @author Петухов Леонид <l.petuhov@okonti.ru>
 */
class data extends \app\model\_added\data {



	/** */
	protected function setting() {
		$this->table_name   = 'main';
	}



	/** Возвращает список позиций заказов */
	public function getItemListOrdersId(int $orders_id) {
		$sql = "SELECT :col: FROM :tab: WHERE orders_id = {$orders_id} AND item_deleted IS NULL";
		$data = $this->select($sql);
		return $data;
	}



/**/
}
