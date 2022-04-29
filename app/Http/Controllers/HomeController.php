<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function managereportHome()
    {
        return view('reports');
    }

    public function profilePage()
    {
        return view('profile');
    }

    public function updateprofile(Request $request)
    {
        $request->validate([
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user_id = $request->id;
        $image = time().'.'.$request->profile_image->extension();
        $request->profile_image->move(public_path('uploads'), $image);
        $user =  User::where('id',$user_id)->update(['profile_image' => $image]);
        if ($user) {

            session()->flash('success','Success! Profile image uploaded');
            return redirect()->back();
        }

        else {
            session()->flash('error','Failed! Profile image not uploaded');
            return redirect()->back();
        }

    }

    public function changePassword(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'current_password' => [
                'required', function ($attribute, $value, $fail) {
                    if (!Hash::check($value, Auth::user()->password)) {
                        $fail('Current Password didn\'t match');
                    }
                },
            ],
            'new_password' => 'min:8|required',
            'confirm_password' => 'required|same:new_password|min:8',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        
       $hashedPassword = Auth::user()->password;

        if (!\Hash::check($request->new_password , $hashedPassword)) {

            $users =User::find(Auth::user()->id);
            $users->password = bcrypt($request->new_password);
            User::where('id' , Auth::user()->id)->update(['password' =>$users->password]);

            session()->flash('success','password updated successfully');
            return redirect()->back();
        
        }else{

            session()->flash('error','new password can not be the old password!');
            return redirect()->back();
        }
 
    }
}
