<?php

namespace App\Http\Controllers;
use App\Mail\AdminInfoMail;
use App\Mail\UserRegisterMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index(Request $request)
    {
        if (auth()->check()){
            return  redirect()->route('homepage');
        }

     else   if ($request->isMethod('post')){
            $this->validate(request(), [
                'firstname' => 'required|min:2|max:50',
                'lastname' => 'required|min:2|max:50',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed|min:6|max:20'
            ]);
            $user = User::create([
            'name'=>Str::of($request->firstname.' '.$request->lastname)->title()->trim(),
            'email'=>trim($request->email),
            'password'=>Hash::make($request->password),
            'activation_code' =>Str::random(50),
                'status' =>0,

        ]);
            Mail::to($request->email)->send(new UserRegisterMail($user));
            Mail::to($request->email)->send(new AdminInfoMail($user));

            return redirect()->route('homepage');

}


        return view('front.auth.register');
    }
    public function logout(Request $request)
    {
        Auth::logout();

       $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }


    public function registerConfirm($activation_code)
    {
        $user = User::where('activation_code',$activation_code)->firstOrFail();
        $user->update([
            'activation_code'=>null,
            'status'=>1
        ]);


        auth()->login($user);

        return redirect()->route('homepage');
    }


}
