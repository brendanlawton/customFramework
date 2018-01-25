<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    /**
     * Standard view point for users
     * @return mixed
     * @throws \App\Core\Exception
     */
    public function index()
    {
        $users = App::get('database')->selectAll('names');

        return view('users', ['users' => $users]);
    }

    /**
     * Add a user to the database
     * @throws \App\Core\Exception
     */
    public function store()
    {
        App::get('database')->insert('names', [
            'personName' => htmlspecialchars($_POST['name'])
        ]);

        return redirect('users');

    }
}