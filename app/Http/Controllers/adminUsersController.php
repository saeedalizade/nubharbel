<?php

namespace App\Http\Controllers;

use App\AdminUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminUsersController extends Controller
{
    public function __construct ()
    {

        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        $users = AdminUser::all ();

        return view ('admin.User.ListUsers', compact ('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
        return view ('admin.User.AddUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request ,AdminUser $adminUser)
    {


        $request->validate ([
            'name' => 'bail|required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = bcrypt ($request->password);
        $data['is_del'] = '0';

        $SaveUsers =AdminUser::create ($data);

        if ($SaveUsers) {
            return redirect ()->to ('admin/ListUsers');
        } else {
            dd ('dd');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdminUser $adminUser
     * @return \Illuminate\Http\Response
     */
    public function show (AdminUser $adminUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminUser $adminUser
     * @return \Illuminate\Http\Response
     */
    public function edit (AdminUser $adminUser,$id)
    {
        $adminUser = AdminUser::find($id);
        return view ('admin.user.EditUser',compact ('adminUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\AdminUser $adminUser
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request, AdminUser $adminUser,$id)
    {
        $data = request()->except(['_token','_method','flag']);
        $Update = User::where('id',$id)->update($data);

        if($request->flag=='IsDel')
        {
            if($Update)
            {
                return response()->json([
                    'Success' => 'تغییر وضعیت کاربر با موفقیت انجام شد'
                ]);
            }else
            {
                return response()->json([
                    'Error' => 'خطا در تغییر وضعیت کاربر'
                ]);
            }

        }else{
            return  redirect ()->to('admin/ListUsers');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminUser $adminUser
     * @return \Illuminate\Http\Response
     */
    public function destroy (AdminUser $adminUser)
    {
        //
    }
}
