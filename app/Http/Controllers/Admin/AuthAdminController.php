<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthAdminController extends Controller
{
    public function login()
    {
        return view("admin.auth.login");
    }


    public function loginUser(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $user = User::where('email' , '=' , $request->email)->first();

        if($user){
            if(Hash::check($request->password ,$user->password)){
                $request->session()->put('userId' , $user->id);
                $request->session()->put('userNom' , $user->nom.' '.$user->prenom);
                return redirect('/admin/dashboard');
            }else{
                return back()->with('fail', 'Utilisateur introuvable');
            }

        }else{
            return back()->with('fail', 'Utilisateur introuvable');
        }
    }


    public function logout(){
        if(Session()->has('userId')){
            Session()->pull('userId');
            Session()->pull('userNom');
            return redirect('/auth/login')->with('success', 'Vous êtes déconnecté avec succès');
        }
    }
}
