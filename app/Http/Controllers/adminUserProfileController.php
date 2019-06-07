<?php

namespace App\Http\Controllers;

use App\AdminUserProfile;
use App\User;
use Illuminate\Http\Request;

class adminUserProfileController extends Controller
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

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request,AdminUserProfile $adminUserProfile)
    {
        $data = request ()->except (['_token', '_method', 'flag']);
        request()->validate([

            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg,png|max:2048',

        ]);
        $imageName = time().'.'.request()->avatar->getClientOriginalExtension();

        request()->avatar->move(public_path('img/avatar_profile'), $imageName);

        $data['avatar'] = $imageName;
        AdminUserProfile::create($data);
        return  back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdminUserProfile $adminUserProfile
     * @return \Illuminate\Http\Response
     */
    public function show (AdminUserProfile $adminUserProfile, $id ,User $user)
    {
        $Profile = AdminUserProfile::where('user_id',$id)->first();
        if(!empty($Profile))
        {
            $UserProfile = $Profile->with('user')->where('user_id',$id)->first();
        }else{
            $UserProfile = User::find($id);
        }

        return view ('admin.User.Profile', compact ('UserProfile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminUserProfile $adminUserProfile
     * @return \Illuminate\Http\Response
     */
    public function edit (AdminUserProfile $adminUserProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\AdminUserProfile $adminUserProfile
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request, AdminUserProfile $adminUserProfile, $id)
    {
        $data = request ()->except (['_token', '_method', 'flag']);
        request()->validate([

            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg,png|max:2048',

        ]);
        $imageName = time().'.'.request()->avatar->getClientOriginalExtension();

        request()->avatar->move(public_path('img/avatar_profile'), $imageName);

        $data['avatar'] = $imageName;

        AdminUserProfile::where ('user_id', $id)->update ($data);

        return  back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminUserProfile $adminUserProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy (AdminUserProfile $adminUserProfile)
    {
        //
    }
}
