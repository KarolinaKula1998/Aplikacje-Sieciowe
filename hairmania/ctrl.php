<?php
require_once 'init.php';
// Rozszerzenia w aplikacji bazodanowej:
// - nowe pola dla konfiguracji połączenia z bazą danych w klasie Config
// - inicjalizacja połączenia z bazą w skrypcie init.php, za pomocą funkcji getDB() - podobnie jak dla wcześniejszych obiektów

// Do połączenia z bazą danych wykorzystujemy "maleńką" bibliotekę Medoo, która obudowuje standardowy obiekt PDO za pomocą klasy Medoo.
// Biblioteka Medoo ułatwia dostęp do bazy dla większości standardowych rodzajów zapytań, przez brak konieczności używania SQL'a.

// Jeżeli użytkownik chce jednak używać bezpośrednio PDO, to biblioteki używamy jedynie w celu połączenia z bazą, a później
// pobieramy obiekt PDO po połączeniu (metoda pdo() obiektu klasy Medoo).

getRouter()->setDefaultRoute('userList'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('userList',        'UserListCtrl');
getRouter()->addRoute('register',        'RegisterCtrl');
getRouter()->addRoute('registerShow',    'RegisterCtrl');
getRouter()->addRoute('accountShow',    'AccountCtrl',);
getRouter()->addRoute('loginShow',        'LoginCtrl');
getRouter()->addRoute('login',            'LoginCtrl');
getRouter()->addRoute('logout',            'LoginCtrl');
getRouter()->addRoute('userEdit',        'UserEditCtrl');
getRouter()->addRoute('userSave',        'UserEditCtrl');
getRouter()->addRoute('userDelete',    'UserEditCtrl');
getRouter()->addRoute('homeShow',    'HomeCtrl');
getRouter()->addRoute('testShow',    'TestCtrl');
getRouter()->addRoute('resultShow',    'ResultCtrl');

getRouter()->go();
