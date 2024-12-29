{extends file="main.tpl"}

{block name=top}

	<div class="bottom-margin">
		<form class="pure-form pure-form-stacked" action="{$conf->action_url}userList">
			<legend>Opcje wyszukiwania</legend>
			<fieldset>
				<input type="text" placeholder="nazwisko" name="email" value="{$searchForm->email}" /><br />
				<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
			</fieldset>
		</form>
	</div>

{/block}

{block name=bottom}
	<table id="tab_people" class="pure-table pure-table-bordered">
		<thead>
			<tr>
				<th>E-mail</th>
				<th>Rola</th>
				<th>Data utworzenia</th>
				<th>Data modyfikacji</th>
				<th>Opcje</th>
			</tr>
		</thead>
		<tbody>
			{foreach $users as $u}
				{strip}
					<tr>
						<td>{$u["email"]}</td>
						<td>{$u["role_id"]}</td>
						<td>{$u["created_at"]}</td>
						<td>{$u["modified_at"]}</td>
						<td>
							<a class="button-small pure-button button-secondary"
								href="{$conf->action_url}userEdit&id={$u['id']}">Edytuj</a>
							&nbsp;
							<a class="button-small pure-button button-warning"
								href="{$conf->action_url}userDelete&id={$u['id']}">Usuń</a>
						</td>
					</tr>
				{/strip}
			{/foreach}
		</tbody>
	</table>

{/block}