<?php

namespace core;

class Validation
{
    public function validatePassword($password)
    {
        if (empty($password)) {
            getMessages()->addError('Nie podano hasła');
        } elseif (strlen($password) < 8) {
            getMessages()->addError('Hasło musi zawierać co najmniej 8 znaków');
        } elseif (!preg_match('/[A-Z]/', $password)) {
            getMessages()->addError('Hasło musi zawierać co najmniej jedną wielką literę');
        } elseif (!preg_match('/[0-9]/', $password)) {
            getMessages()->addError('Hasło musi zawierać co najmniej jedną cyfrę');
        }
    }

    public function validatePhone($phone)
    {
        if (empty($phone)) {
            getMessages()->addError('Nie podano numeru telefonu');
        } elseif (!preg_match('/^[0-9]{9}$/', $phone)) {
            getMessages()->addError('Numer telefonu musi składać się z 9 cyfr');
        }
    }

    public function validateEmail($email)
    {
        if (empty($email)) {
            getMessages()->addError('Nie podano adresu e-mail');
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            getMessages()->addError('Nieprawidłowy format adresu e-mail');
        }
    }

    public function validateName($name)
    {
        if (empty($name)) {
            getMessages()->addError('Nie podano imienia');
        } elseif (strlen($name) < 2) {
            getMessages()->addError('Imię musi zawierać co najmniej 2 znaki');
        }
    }

    public function validateSurname($surname)
    {
        if (empty($surname)) {
            getMessages()->addError('Nie podano nazwiska');
        } elseif (strlen($surname) < 2) {
            getMessages()->addError('Nazwisko musi zawierać co najmniej 2 znaki');
        }
    }
}
