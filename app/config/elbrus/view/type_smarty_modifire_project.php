<?php
namespace app\config\elbrus\view;

###########################################################################
###########################################################################
###########################################################################
##### Модификаторы
###########################################################################
###########################################################################
###########################################################################





# Возвращает массив модификаторов
function smarty_modifier__registry_project() {
	return [
		'project_title'   => __NAMESPACE__ .'\smarty_modifier__project_title',
		'project_logo'    => __NAMESPACE__ .'\smarty_modifier__project_logo',
		'project_phone'   => __NAMESPACE__ .'\smarty_modifier__project_phone',
		'project_url'     => __NAMESPACE__ .'\smarty_modifier__project_url',
	];
}





/** Функция-модификатор: Возвращает ссылку на логотип */
function smarty_modifier__project_logo($value) {
	return \registry::call()->get('project_logo');
}

/** Функция-модификатор: Возвращает название проекта */
function smarty_modifier__project_title($value) {
	return \registry::call()->get('project_title');
}

/** Функция-модификатор: Возвращает телефон проекта */
function smarty_modifier__project_phone($value) {
	return \registry::call()->get('project_phone');
}

/** Функция-модификатор: Возвращает url проекта */
function smarty_modifier__project_url($value) {
	return \registry::call()->get('project_url');
}
