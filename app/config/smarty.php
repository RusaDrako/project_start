<?php

require_once(\registry::call()->get('FOLDER_ROOT') . 'app/config/elbrus/view/type_smarty_3.php');
require_once(\registry::call()->get('FOLDER_ROOT') . 'app/config/elbrus/view/type_smarty_modifire.php');
require_once(\registry::call()->get('FOLDER_ROOT') . 'app/config/elbrus/view/type_smarty_modifire_project.php');
require_once(\registry::call()->get('FOLDER_ROOT') . 'app/config/elbrus/view/type_smarty_function.php');
# Расширение функционала базового шаблонизатора
require_once(\registry::call()->get('FOLDER_ROOT') . 'app/config/elbrus/view/view_project.php');
# Для расширения устанавливаем alias
class_alias('app\config\elbrus\view\view_project', 'view_project');

###############################################################################
# Альтернатива шаблонизатора
###############################################################################

\view_project::call(new \app\config\elbrus\view\type_smarty_3())
//		->variable('folder_public',   \registry::call()->get('FOLDER_PUBLIC', '/'))
		->variable('test',            \registry::call()->get('test'))
		;
