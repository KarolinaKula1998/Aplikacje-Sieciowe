{extends file="main.tpl"}

{block name=top}
    Witaj {$smarty.session.user.name}!
{/block}
<?php
phpinfo();
?>