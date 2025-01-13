<?php

namespace app\controllers;

use app\forms\RegisterForm;
use PDOException;

class RegisterCtrl
{
    private $form;

    public function __construct()
    {
        //stworzenie potrzebnych obiektów
        $this->form = new RegisterForm();
    }

    public function validate()
    {
        $this->form->email = getFromRequest('email');
        $this->form->pass = getFromRequest('pass');
        $this->form->phone = getFromRequest('phone');
        $this->form->name = getFromRequest('name');
        $this->form->surname = getFromRequest('surname');

        getValidation()->validateEmail($this->form->email);
        getValidation()->validatePassword($this->form->pass);
        getValidation()->validatePhone($this->form->phone);
        getValidation()->validateName($this->form->name);
        getValidation()->validateSurname($this->form->surname);

        // Jeśli są błędy, zatrzymaj walidację
        return !getMessages()->isError();
    }

    public function action_register()
    {
        if ($this->validate()) {
            $userRoleId = 2;
            $passwordHash = password_hash($this->form->pass, PASSWORD_DEFAULT);

            try {
                getDB()->insert("users", [
                    "email" => $this->form->email,
                    "password" => $passwordHash,
                    "role_id" => $userRoleId,
                    "phone_number" => $this->form->phone,
                    "name" => $this->form->name,
                    "surname" => $this->form->surname,
                ]);

                $this->loginAfterRegistration($this->form->email, $this->form->pass);
            } catch (PDOException $e) {
                getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (getConf()->debug) getMessages()->addError($e->getMessage());
                $this->generateView();
            }
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    private function loginAfterRegistration($email, $password)
    {
        $loginCtrl = new LoginCtrl();
        $_POST['email'] = $email;
        $_POST['pass'] = $password;
        $loginCtrl->action_login();
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
