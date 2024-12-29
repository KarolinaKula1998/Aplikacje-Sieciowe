{extends file="main.tpl"}

{block name=top}
    Witaj {$smarty.session.user.email}
{/block}
<?php
phpinfo();
?>