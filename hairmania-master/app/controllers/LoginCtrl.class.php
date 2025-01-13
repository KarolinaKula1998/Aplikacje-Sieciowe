<?php

namespace app\controllers;

use app\forms\LoginForm;
use PDOException;

class LoginCtrl
{
	private $form;

	public function __construct()
	{
		//stworzenie potrzebnych obiektów
		$this->form = new LoginForm();
	}

	public function validate()
	{
		$this->form->email = getFromRequest('email');
		$this->form->pass = getFromRequest('pass');

		//nie ma sensu walidować dalej, gdy brak parametrów
		if (!isset($this->form->email)) return false;

		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if (empty($this->form->email)) {
			getMessages()->addError('Nie podano adresu e-mail');
		}
		if (empty($this->form->pass)) {
			getMessages()->addError('Nie podano hasła');
		}

		//nie ma sensu walidować dalej, gdy brak wartości
		if (getMessages()->isError()) return false;

		return true;
	}

	public function action_loginShow()
	{
		$this->generateView();
	}

	public function action_login()
	{
		if ($this->validate()) {
			try {
				$user = getDB()->get("users", "*", [
					"email" => $this->form->email
				]);
				if ($user && password_verify($this->form->pass, $user['password'])) {
					// Logowanie udane, zapisz ID użytkownika w sesji
					$_SESSION['user'] = [
						'id' => $user['id'],
						'email' => $user['email'],
						'role_id' => $user['role_id'],
						'name' => $user['name'],
					];

					getMessages()->addInfo("Zalogowano pomyślnie.");
					redirectTo("accountShow");
				} else {
					getMessages()->addError("Niepoprawne dane logowania.");
					$this->generateView();
				}
			} catch (PDOException $e) {
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());
			}
		} else {
			//niezalogowany => pozostań na stronie logowania
			$this->generateView();
		}
	}

	public function action_logout()
	{
		// 1. zakończenie sesji
		session_destroy();
		// 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
		redirectTo('userList');
	}

	public function generateView()
	{
		getSmarty()->assign('form', $this->form); // dane formularza do widoku
		getSmarty()->display('LoginView.tpl');
	}
}
