<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function login()
    {
        return View('authentication.login');
    }

    public function postLogin(Request $request)
    {
       Sentinel::authenticate($request->all());

       $slug = Sentinel::getUser()->roles()->first()->slug;
       if( $slug == 'admin')
           return redirect('/admin-item-karyawan');
       elseif( $slug == 'manager')
           return redirect('/manager-item-karyawan');     
       elseif( $slug == 'visitor')
           return redirect('/product');        
     //  return Sentinel::check();
    }

    public function logout()
    {
        Sentinel::logout();
        return redirect("/login");
    }
}
