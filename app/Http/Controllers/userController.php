<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AdminUserProfile;

class userController extends Controller
{
    public function __construct ()
    {
        $this->middleware ('auth');
    }


    public function ProfileUser ()
    {

        $UserProfile = AdminUserProfile::with ('user')->where ('id', auth ()->user ()->id)->first ();
        return view ('user.profile', compact ('UserProfile'));

    }

    /**
     * @param Request $request
     * @param $id
     */
    public function editProfileUser (Request $request, $id)
    {
        $UserProfile = AdminUserProfile::with ('user')->where ('id', $id)->first ();
         $UserProfileInfo =  request ()->except (['_token', '_method']);
        if (!empty($UserProfile)) {

            AdminUserProfile::where ('id', $id)->update ($UserProfileInfo);
            return back()->withInput();

        } else {
            return redirect ('/home');
        }

    }
}
