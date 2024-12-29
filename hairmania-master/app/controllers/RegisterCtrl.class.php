<?php

namespace app\controllers;

use app\forms\LoginForm;
use PDOException;

class RegisterCtrl
{
    private $form;

    public function __construct()
    {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate()
    {
        $this->form->login = getFromRequest('login');
        $this->form->pass = getFromRequest('pass');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login)) return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->login)) {
            getMessages()->addError('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            getMessages()->addError('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (getMessages()->isError()) return false;
        return true;
    }

    public function action_register()
    {
        if ($this->validate()) {
            $userRoleId = 2;

            try {
                getDB()->insert("users", [
                    "email" => $this->form->login,
                    "password" => $this->form->pass,
                    "role_id" => $userRoleId
                ]);
                redirectTo("accountShow");
            } catch (PDOException $e) {
                getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (getConf()->debug) getMessages()->addError($e->getMessage());
            }
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function action_registerShow()
    {
        $this->generateView();
    }

    public function generateView()
    {
        getSmarty()->assign('form', $this->form);
        getSmarty()->display('Register.tpl');
    }
}
