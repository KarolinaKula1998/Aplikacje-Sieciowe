<?php

namespace app\controllers;

use app\forms\UserEditForm;
use DateTime;
use PDOException;

class UserEditCtrl
{

	private $form; //dane formularza
	private $roles;

	public function __construct()
	{
		//stworzenie potrzebnych obiektów
		$this->form = new UserEditForm();
	}

	//validacja danych przed zapisem (nowe dane lub edycja)
	public function validateSave()
	{
		//0. Pobranie parametrów z walidacją
		$this->form->id = getFromRequest('id', true, 'Błędne wywołanie aplikacji');
		$this->form->email = getFromRequest('email', true, 'Błędne wywołanie aplikacji');
		$this->form->roleId = getFromRequest('roleId', true, 'Błędne wywołanie aplikacji');

		if (getMessages()->isError()) return false;

		// 1. sprawdzenie czy wartości wymagane nie są puste
		if (empty(trim($this->form->email))) {
			getMessages()->addError('Wprowadź email');
		}

		if (empty(trim($this->form->roleId))) {
			getMessages()->addError('Wprowadź rolę');
		}

		if (getMessages()->isError()) return false;

		return ! getMessages()->isError();
	}

	//validacja danych przed wyswietleniem do edycji
	public function validateEdit()
	{
		//pobierz parametry na potrzeby wyswietlenia danych do edycji
		//z widoku listy osób (parametr jest wymagany)
		$this->form->id = getFromRequest('id', true, 'Błędne wywołanie aplikacji');
		return ! getMessages()->isError();
	}

	public function action_userNew()
	{
		$this->generateView();
	}

	//wysiweltenie rekordu do edycji wskazanego parametrem 'id'
	public function action_userEdit()
	{
		// 1. walidacja id osoby do edycji
		if ($this->validateEdit()) {
			try {
				// 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
				$record = getDB()->get("users", "*", [
					"id" => $this->form->id
				]);
				$this->form->id = $record['id'];
				$this->form->email = $record['email'];
				$this->form->roleId = $record['role_id'];
			} catch (PDOException $e) {
				getMessages()->addError('Wystąpił błąd podczas odczytu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());
			}
		}

		// 3. Wygenerowanie widoku
		$this->generateView();
	}

	public function action_userDelete()
	{
		// 1. walidacja id osoby do usuniecia
		if ($this->validateEdit()) {

			try {
				// 2. usunięcie rekordu
				getDB()->delete("users", [
					"id" => $this->form->id
				]);
				getMessages()->addInfo('Pomyślnie usunięto rekord');
			} catch (PDOException $e) {
				getMessages()->addError('Wystąpił błąd podczas usuwania rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());
			}
		}

		// 3. Przekierowanie na stronę listy osób
		forwardTo('userList');
	}

	public function action_userSave()
	{
		// 1. Walidacja danych formularza (z pobraniem)
		if ($this->validateSave()) {
			// 2. Zapis danych w bazie
			try {
				//2.2 Edycja rekordu o danym ID
				getDB()->update("users", [
					"email" => $this->form->email,
					"role_id" => $this->form->roleId
				], [
					"id" => $this->form->id
				]);

				getMessages()->addInfo('Pomyślnie zapisano rekord');
			} catch (PDOException $e) {
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());
			}

			// 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
			forwardTo('userList');
		} else {
			// 3c. Gdy błąd walidacji to pozostań na stronie
			$this->generateView();
		}
	}

	public function generateView()
	{
		try {
			$this->roles = getDB()->select("roles", "*");
		} catch (PDOException $e) {
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());
		}

		getSmarty()->assign('roles', $this->roles);  // lista rekordów z bazy danych
		getSmarty()->assign('form', $this->form); // dane formularza dla widoku
		getSmarty()->display('UserEdit.tpl');
	}
}
