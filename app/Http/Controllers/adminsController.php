<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class adminsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin',['except'=>['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|View
     */
    public function index(Request $request)
    {

        if(Route::currentRouteName()=='sadmin' && session()->get('AccessAdmin') == 'Yes')
        {
            return Redirect::route('dashboard');
        }
        return view('admin/loginAdmin');
    }


    /**
     * @param Request $request
     * @return string
     */
    public function checkLogin(Request $request)
    {

        $User = new User();
        $admin =  $User->infoUser($request->email);


        if(!empty($admin) && Hash::check($request->password,$admin->password))
        {
            session(['AccessAdmin' => 'Yes']);
            return 'success';
        }else{

            return 'error';
        }

    }

    public function Logout ()
    {
        Session::flush();
        return Redirect::route('sadmin');
    }

    public function dashboard()
    {

        return view('admin/index');

    }


}
