<?php

namespace App\Http\Controllers;

class UsersController
{
    public function getUser($id)
    {
        return '<h2>User profile with id - ' . $id . '</h2>';
    }

    public function userDelete($id)
    {
        return '<h2>User with id - ' . $id . ' has been delated</h2>';
    }

}
