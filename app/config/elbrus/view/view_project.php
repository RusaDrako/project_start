<?php
namespace app\config\elbrus\view;



/**
 * @author Петухов Леонид <l.petuhov@okonti.ru>
 */
class view_project extends \view {



	/** Возвращает html-код указанного шаблона
	 * @param string $link Ссылка на файл шаблона
	 */
	public function page($link) {
		$this->display(\registry::call()->get('skin_header', '_skin/default/header'));
		$this->display($link);
		$this->display(\registry::call()->get('skin_footer', '_skin/default/footer'));
	}



/**/
}
