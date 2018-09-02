<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use App\User;

class RegistrationController extends Controller
{
    public function register()
    {
        return View('authentication.register');
    }

    public function postRegister(Request $request)
    {
        $user = Sentinel::register($request->all());

        $activation = Activation::create($user);

        $role = Sentinel::findRoleBySlug('visitor');
        $role->users()->attach($user);
       return redirect("/login");
    }
}
