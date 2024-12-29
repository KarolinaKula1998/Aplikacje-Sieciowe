{extends file="main.tpl"}

{block name=top}

    <div class="bottom-margin">
        <form action="{$conf->action_root}userSave" method="post" class="pure-form pure-form-aligned">
            <fieldset>
                <legend>Dane osoby</legend>
                <div class="pure-control-group">
                    <label for="email">E-mail</label>
                    <input id="email" type="text" placeholder="E-mail" name="email" value="{$form->email}">
                </div>
                <div class="pure-control-group">
                    <label for="roleId">Rola</label>
                    <select id="roleId" name="roleId">
                        {foreach $roles as $role}
                            <option value="{$role.id}">{$role.name}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="pure-controls">
                    <input type="submit" class="pure-button pure-button-primary" value="Zapisz" />
                    <a class="pure-button button-secondary" href="{$conf->action_root}userList">Powrót</a>
                </div>
            </fieldset>
            <input type="hidden" name="id" value="{$form->id}">
        </form>
    </div>

{/block}