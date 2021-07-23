<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    public function my_account()
    {
        return view('my-account');
    }

    public function showChangePasswordForm()
    {
        return view('auth.passwords.change-password');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', Hash::check('fdgfg', Auth::user()->password)],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);
        echo '<script type="text/javascript">'
        , 'history.go(-2);'
        , '</script>';
    }

    public function request(Request $request)
    {
        $validateRequest = Validator::make($request->all(), [
            'name' => ['required', 'string', 'min:4'],
            'last_name' => ['required', 'string', 'min:4'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:senders'],
            'phone' => ['required', 'numeric', 'min:8'],
        ]);
        $user = User::where("email", $request->email)->first();
        $validateRequest->after(function ($validateLogin) use ($user, $request) {
            if (!$user) {
                $validateLogin->errors()
                    ->add('email', 'Wrong email information!');
            }

        });

        if ($validateRequest->fails()) {
            return redirect()
                ->back()
                ->withErrors($validateRequest)->withInput();
        } else {
            Session::put('user_id', $user->id);
            auth()->login($user);
        }

    }

    public function about()
    {
        return view('about');
    }

    public function requestAnItem()
    {
        return view('requestAnItem');
    }

    public function brands()
    {
        return view('brands');
    }

    public function faqs()
    {
        return view('faq');
    }

    public function contact()
    {
        return view('contact');
    }



}
