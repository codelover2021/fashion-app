<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AmbassadorController extends Controller
{
    public function ambassador()
    {
        return view('ambassador');
    }
    public function ambassadorSend(Request $request)
    {
        dd($request);
        $validateRequest = Validator::make($request->all(), [
            'name' => ['required', 'string', 'min:4'],
            'full_name' => ['required', 'string', 'min:4'],
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
}
