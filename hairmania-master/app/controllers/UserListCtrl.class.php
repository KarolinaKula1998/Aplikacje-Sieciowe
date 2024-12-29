<?php

namespace app\controllers;

use app\forms\UserSearchForm;
use PDOException;

class UserListCtrl
{

	private $form;
	private $records;

	public function __construct()
	{
		$this->form = new UserSearchForm();
	}

	public function validate()
	{
		$this->form->email = getFromRequest('email');
		return ! getMessages()->isError();
	}


	private function isAdmin()
	{
		$user = $_SESSION['user'] ?? null;

		if ($user && isset($user['role_id']) && $user['role_id'] == 1) {
			return true;
		}
		return false;
	}

	public function action_userList()
	{
		if (!$this->isAdmin()) {
			getMessages()->addError("Brak uprawnień do przeglądania listy osób.");
			redirectTo('loginShow');
			return;
		}

		$this->validate();

		$search_params = [];
		if (isset($this->form->email) && strlen($this->form->email) > 0) {
			$search_params['email[~]'] = $this->form->email . '%';
		}

		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$where = ["AND" => &$search_params];
		} else {
			$where = &$search_params;
		}
		$where["ORDER"] = "email";

		try {
			$this->records = getDB()->select("users", [
				"id",
				"email",
				"role_id",
				"created_at",
				"modified_at"
			], $where);
		} catch (PDOException $e) {
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());
		}

		// 4. wygeneruj widok
		getSmarty()->assign('searchForm', $this->form); // dane formularza (wyszukiwania w tym wypadku)
		getSmarty()->assign('users', $this->records);  // lista rekordów z bazy danych
		getSmarty()->display('UserList.tpl');
	}
}
