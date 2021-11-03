<?php

$module = '/' . basename(__FILE__, '.php') . '/';



/** Вывод редактирования разделов */
$func = function () {
	$list = \factory::call()->getObj('new_project\main')->getAll();
	view_project::call()->variable('list', $list);
	view_project::call()->page('new_project/common');
};
# Заглавная страница
router::call()->any("/", $func);
router::call()->any("{$module}", $func);
