{extends file="main.tpl"}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

<form action="{$conf->action_url}calcCompute#app_content" method="post" class="pure-form pure-form-aligned bottom-margin">
<legend><strong> <span style='font-size: 24px;'>Kalkulator kredytowy</legend>
		<fieldset>
		<label for="kwota">Kwota kredytu o którą się ubiegasz </label>
		<input id="kwota" type="text" placeholder="kwota" name="kwota" value="{$form->kwota}">
		<label for="oprocentowanie">Oprocentowanie kredytu w % </label>
		<input id="oprocentowanie" type="text" placeholder="oprocentowanie" name="oprocentowanie" value="{$form->oprocentowanie}">
		<label for="okres">Czas kredytowania w miesiącach </label>
		<input id="okres" type="text" placeholder="okres" name="okres" value="{$form->okres}">
		<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
		</fieldset>	
	</form>
	
	
	
{include file='messages.tpl'}

{if isset($result->rata)}
<div class="messages info">
	<h4>Wynik</h4> 
	<p class="res">
	{$result->rata}
</div>
{/if}

{/block}