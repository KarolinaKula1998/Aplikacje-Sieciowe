{extends file="main.tpl"}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

<form action="{$conf->action_url}calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Kalkulator kredytowy</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_k">Kwota kredytu o którą się ubiegasz </label>
			<input id="id_k" type="text" name="k" value="{$form->k}" />
		</div>
        <div class="pure-control-group">
			<label for="id_b">Oprocentowanie kredytu w % </label>
			<input id="id_b" type="text" name="b" value="{$form->b}" />
		</div>
        <div class="pure-control-group">
			<label for="id_n">Czas kredytowania w miesiącach </label>
			<input id="id_n" type="text" name="n" value="{$form->n}" />
		</div>
		<div class="pure-controls">
			<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	

{include file='messages.tpl'}

{if isset($res->r)}
<div class="messages info">
	Wynik: {$res->r}
</div>
{/if}

{/block}