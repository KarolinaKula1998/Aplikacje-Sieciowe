<?php

namespace core;

class CommonFunctions
{
    public function isAdmin()
    {
        $user = $_SESSION['user'] ?? null;

        if ($user && isset($user['role_id']) && $user['role_id'] == 1) {
            return true;
        }
        return false;
    }

    public function isStylist()
    {
        $user = $_SESSION['user'] ?? null;

        if ($user && isset($user['role_id']) && $user['role_id'] == 3) {
            return true;
        }
        return false;
    }
}
