<?php

namespace app\controllers;


class ResultCtrl
{
    public function action_resultShow()
    {
        if (!isset($_SESSION['last_result'])) {
            redirectTo('homeShow');
            exit();
        }

        $result = $_SESSION['last_result'];
        // unset($_SESSION['last_result']);
        getSmarty()->assign('result', $result);
        $this->generateView();
    }

    public function generateView()
    {
        getSmarty()->display('ResultView.tpl');
    }
}
