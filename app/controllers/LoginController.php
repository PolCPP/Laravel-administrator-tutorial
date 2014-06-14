<?php

class LoginController extends \BaseController {


    public function getIndex()
    {
        return View::make('login.index');
    }

    public function postIndex()
    {
        $username = Input::get('username');
        $password = Input::get('password');

        if (Auth::attempt(['username' => $username, 'password' => $password]))
        {
            return Redirect::intended('/admin');
        }

        return Redirect::back()
            ->withInput()
            ->withErrors('Username or Password are incorrect.');
    }
}
