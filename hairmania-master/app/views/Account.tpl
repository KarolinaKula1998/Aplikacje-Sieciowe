{extends file="main.tpl"}

{block name=styles}
    <link rel="stylesheet" href="{$conf->app_url}/css/account.css">
{/block}

{block name=top}
    <div class="account-container">
        <div class="account-container__content">
            {if $currentView == 'intro'}
                Witaj {$smarty.session.user.name}!
                <div class="intro-view">
                    <h2>Wprowadzenie</h2>
                    <p>Tutaj znajdziesz podstawowe informacje na temat pielęgnacji włosów.</p>
                </div>

            {elseif $currentView == 'hairplan'}
                {if isset($currentPlan) && !empty($currentPlan)}
                    <p>Twoje włosy są:</p>
                    <p>{$currentPlan.porosity_name}</p>
                    {if $currentPlan.porosity_type_id == 1}
                        <h4>1. MYCIE</h4>
                        <ul>
                            <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę humektantową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>2. MYCIE</h4>
                        <ul>
                            <li>Myjemy dwukrotnie skórę głowy mocnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę emolientową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>3. MYCIE</h4>
                        <ul>
                            <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę humektantową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>4. MYCIE</h4>
                        <ul>
                            <li>Nakładamy olej do olejowania na włosy - trzymamy przez godzinę.</li>
                            <li>Myjemy skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy maskę - trzymamy minimum 30 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>5. MYCIE</h4>
                        <ul>
                            <li>Nakładamy peeling na skórę głowy - spłukujemy.</li>
                            <li>Myjemy dwukrotnie skórę głowy mocnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę proteinową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <p><strong>WAŻNE:</strong> Nie chodzimy spać w mokrych włosach. Włosy suszymy chłodnym lub letnim nawiewem. Do
                            spania
                            związujemy włosy, np. w delikatnego kucyka.</p>

                    {elseif $currentPlan.porosity_type_id == 2}
                        <h4>1. MYCIE</h4>
                        <ul>
                            <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę emolientową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>2. MYCIE</h4>
                        <ul>
                            <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę humektantową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>3. MYCIE</h4>
                        <ul>
                            <li>Myjemy dwukrotnie skórę głowy mocnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę emolientową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>4. MYCIE</h4>
                        <ul>
                            <li>Nakładamy olej do olejowania na włosy - trzymamy przez godzinę.</li>
                            <li>Myjemy skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy maskę - trzymamy minimum 30 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>5. MYCIE</h4>
                        <ul>
                            <li>Nakładamy peeling na skórę głowy - spłukujemy.</li>
                            <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę proteinową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <p><strong>WAŻNE:</strong> Nie chodzimy spać w mokrych włosach. Włosy suszymy chłodnym lub letnim nawiewem. Do
                            spania
                            związujemy włosy, np. w delikatnego kucyka.</p>

                    {elseif $currentPlan.porosity_type_id == 3}
                        <h4>1. MYCIE</h4>
                        <ul>
                            <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy maskę - trzymamy minimum 30 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>2. MYCIE</h4>
                        <ul>
                            <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę humektantową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>3. MYCIE</h4>
                        <ul>
                            <li>Myjemy dwukrotnie skórę głowy mocnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę emolientową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>4. MYCIE</h4>
                        <ul>
                            <li>Nakładamy olej do olejowania na włosy - trzymamy przez godzinę.</li>
                            <li>Myjemy skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy maskę - trzymamy minimum 30 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <h4>5. MYCIE</h4>
                        <ul>
                            <li>Nakładamy peeling na skórę głowy - spłukujemy.</li>
                            <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                            <li>Nakładamy odżywkę proteinową - trzymamy 5-7 minut - spłukujemy.</li>
                            <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
                        </ul>

                        <p><strong>WAŻNE:</strong> Nie chodzimy spać w mokrych włosach. Włosy suszymy chłodnym lub letnim nawiewem. Do
                            spania
                            związujemy włosy, np. w delikatnego kucyka.</p>
                    {/if}
                {else}
                    <div class="no-results-message">
                        <p>Nie masz jeszcze aktualnego planu.</p>
                        <a class="button-small pure-button button-success" href="{$conf->action_url}testShow">Przejdź do testów</a>
                    </div>
                {/if}

            {elseif $currentView == 'results'}
                <!-- Widok wyników -->
                {if empty($records)}
                    <div class="no-results-message">
                        <p>Nie masz jeszcze żadnych wyników.</p>
                        <a class="button-small pure-button button-success" href="{$conf->action_url}testShow">Przejdź do testów</a>
                    </div>
                {else}
                    <table class="pure-table pure-table-bordered users-table">
                        <thead>
                            <tr>
                                <th>Typ</th>
                                <th>Wynik</th>
                                <th>Data utworzenia</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach $records as $r}
                                {strip}
                                    <tr>
                                        <td>{$r["porosity_name"]}</td>
                                        <td>{$r["score_result"]}</td>
                                        <td>{$r["created_at"]}</td>
                                        <td>
                                            <a class="button-small pure-button button-warning"
                                                href="{$conf->action_url}resultDelete&id={$r['id']}">Usuń</a>
                                        </td>
                                    </tr>
                                {/strip}
                            {/foreach}
                        </tbody>
                    </table>
                {/if}

            {elseif $currentView == 'products'}
                <!-- Widok produktów -->
                <div class="products-view">
                    <h2>Produkty</h2>
                    <p>Tutaj znajdziesz polecane produkty do pielęgnacji włosów.</p>
                </div>
            {/if}
        </div>
        <div class="account-container__menu">
            <div class="account-menu">
                <p><a href="{$conf->action_url}accountShow&view=intro" {if $currentView == 'intro'}class="active"
                        {/if}>Wprowadzenie</a></p>
                <p><a href="{$conf->action_url}accountShow&view=hairplan" {if $currentView == 'hairplan'}class="active"
                        {/if}>Aktualny plan</a></p>
                <p><a href="{$conf->action_url}accountShow&view=products" {if $currentView == 'products'}class="active"
                        {/if}>Twoje produkty</a></p>
                <p><a href="{$conf->action_url}accountShow&view=results" {if $currentView == 'results'}class="active"
                        {/if}>Wyniki</a></p>
            </div>
        </div>
    </div>
{/block}