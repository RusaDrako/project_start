<!-- {"`$smarty.current_dir`/`$smarty.template`"|tmp_dir} -->
{*print_info data=$list*}
<div class="row">
	<div class="col border">
		<h4>Новый проект</h4>
	</div>
</div>

<div class="row">
	<div class="col-8 border">
		Старт нового проекта
	</div>
	<div class="col border">
		{foreach from=$list->iterator() item=v key=k}
		<div class="row border">
			<div class="col-1">
				{$v->ID}
			</div>
			<div class="col">
				{$v->TITLE}
			</div>
		</div>
		{/foreach}
	</div>
</div>

<hr>

<div class="row">
	<div class="col-4 border">
		{include file="__error/error.tpl" text='тест' type='info'}
		{include file="__error/error.tpl" text='тест' type='success'}
		{include file="__error/error.tpl" text='тест' type='warning'}
		{include file="__error/error.tpl" text='тест' type='danger'}
	</div>
	<div class="col border">
		{include file="__error/404.tpl"}
	</div>
</div>

<!-- {"`$smarty.current_dir`/`$smarty.template`"|tmp_dir} end -->
