<?php

class UsersController
{
    /**
     * Standard view point for users
     * @return mixed
     * @throws Exception
     */
    public function index()
    {
        $users = App::get('database')->selectAll('names');

        return view('users', ['users' => $users]);
    }

    public function store()
    {
        App::get('database')->insert('names', [
            'personName' => htmlspecialchars($_POST['name'])
        ]);

        return redirect('users');

    }
}