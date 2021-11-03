<?php

namespace app\controller;



/**/
class default_page {



	/**/
	public function __construct() {}



	/**/
	public function default() {
		$this->page_404();
		exit;
	}



	/** Выводит: Страница не найдена */
	public function page_404() {
		\view_project::call()->page('__error/404');
		exit;
//		echo '404 - Страница не найдена :)';
//		echo '<br>';
//		echo '<a href="\">На главную</a>';
	}



	/** Выводит: Страницу с ошибкой */
	public function page_danger($text) {
		\view_project::call()->variable('type',   'danger');
		\view_project::call()->variable('text',   $text);
		\view_project::call()->page('__error/error');
		exit;
	}



	/** Выводит: Страницу с предупреждением */
	public function page_warning($text) {
		\view_project::call()->variable('type',   'warning');
		\view_project::call()->variable('text',   $text);
		\view_project::call()->page('__error/error');
		exit;
	}



	/** Выводит: Страницу с подтверждением */
	public function page_success($text) {
		\view_project::call()->variable('type',   'success');
		\view_project::call()->variable('text',   $text);
		\view_project::call()->page('__error/error');
		exit;
	}



	/** Выводит: Страницу с информацией */
	public function page_info($text) {
		\view_project::call()->variable('type',   'info');
		\view_project::call()->variable('text',   $text);
		\view_project::call()->page('__error/error');
		exit;
	}



/**/
}
