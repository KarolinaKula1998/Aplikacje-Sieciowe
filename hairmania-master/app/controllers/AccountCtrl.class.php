<?php

namespace app\controllers;



class AccountCtrl
{
    public function generateView()
    {
        // getSmarty()->assign('form',$this->form);
        getSmarty()->display('Account.tpl');
    }

    public function action_accountShow()
    {
        // 1. walidacja id osoby do edycji
        $user = $_SESSION['user'];

        if ($user) {
            $this->generateView();
        } else {
            // Obsługa przypadku, gdy rekord nie istnieje
            getMessages()->addError("Nie znaleziono użytkownika o podanym ID.");
            redirectTo('loginShow');
        }

        // 3. Wygenerowanie widoku
    }
}
