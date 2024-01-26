{extends file="main.tpl"}
{* przy zdefiniowanych folderach nie trzeba już podawać pełnej ścieżki *}

{block name=footer}Kalkulator stworzony przez Karolinę Kula{/block}

{block name=content}

<h3>Prosty kalkulator</h2>


<form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">
	<fieldset>
	
			<label for="id_k">Kwota kredytu o którą się ubiegasz </label>
			<input id="id_k" type="text" placeholder="" name="k" value="{$form->k}" />
			<label for="id_b">Oprocentowanie kredytu w % </label>
			<input id="id_b" type="text" placeholder="" name="b" value="{$form->b}" />
			<label for="id_n">Czas kredytowania w miesiącach </label>
			<input id="id_n" type="text" placeholder="" name="n" value="{$form->n}" />

	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>

<div class="messages">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->r)}
	<h4>Wynik</h4>
	<p class="res">
	{$res->r}
	</p>
{/if}

</div>

{/block}