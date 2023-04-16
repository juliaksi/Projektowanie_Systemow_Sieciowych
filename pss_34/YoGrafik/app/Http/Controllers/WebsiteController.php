<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function Profil(){
        return view("paneluzytkownika");
    }

    public function Register(){
        return view("registration");
    }
    public function Logout(){
        Auth::logout();
        return redirect()->route("dashboard");
    }

    public function Login(){
        return view("login");
    }
    public function DodajZajęcia(Request $request){
        $request->validate([
            'name' => 'required|string|max:50',
            'surname' => 'required|string|max:70',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:4',
            'password_confirmation' => 'required'
        ]);

        $user = New User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->surname = $request->surname;
        $user->save();
        Auth::login($user);
        return redirect('/')->with('success', 'Registration completed');

    }

    public function Panelzarzadzania(){
            $users = User::paginate(5);
            return view("panelzarzadzania", ['users' => $users]);

    }





    public function LoginSubmit(Request $request){
        //dd($request->all());

        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:4']);
        $user= User::where("email",$request->email)->first();
        if (!$user){
            return redirect()->route("login")->with("error","no user found");
        }
        if (Hash::check($request->password,$user->password)){
            Auth::login($user);
            return redirect()->route('dashboard')->with('success', 'you are logged in');
        } else {
            return redirect()->route("login")->with("error","wrong password");
        }
    }
    public function RegisterSubmit(Request $request){
        //return $request->all();
        $request->validate([
           'name' => 'required|string|max:50',
           'surname' => 'required|string|max:70',
           'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:4',
            'password_confirmation' => 'required'
        ]);

        $user = New User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->surname = $request->surname;
        $user->save();
        Auth::login($user);
        return redirect('/')->with('success', 'Registration completed');

    }

    public function email_check(Request $request){
        $user = User::where('email', $request->email)->first();
        if($user){
            return response()->json(['email_exists']);
        } else {
            return response()->json(['OK']);
        }

    }
}
