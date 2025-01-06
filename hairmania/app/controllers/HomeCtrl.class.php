<?php

namespace app\controllers;

class HomeCtrl
{

    public function action_homeShow()
    {
        $this->generateView();
    }

    public function generateView()
    {
        getSmarty()->display('HomeView.tpl');
    }
}
