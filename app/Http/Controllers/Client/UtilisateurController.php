<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('client.pages.dashboard');
    }

    public function register()
    {
        //
        return view('client.auth.register');
    }

    public function login()
    {
        //
        return view('client.auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Utilisateur::find($id);
        return view('client.pages.utilisateur', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    //     // dd($request);
    //     $utilisateur = Utilisateur::find($id);
    //     $utilisateur->email = $request->input('email');
    //     $utilisateur->mdp = $request->input('mdp');
    //     $utilisateur->nom = $request->input('nom');
    //     $utilisateur->prenom = $request->input('prenom');
    //     $utilisateur->telephone = $request->input('telephone');
    //     $utilisateur->image = $request->input('image');
    //     $utilisateur->adresse = $request->input('adresse');
    //     $utilisateur->niveau = $request->input('niveau');
    //     $utilisateur->specialite = $request->input('specialite');

    //     // Gestion du Cv
    //     if ($request->hasFile('file')) {
    //         $file = $request->file('file');
    //         $filePath = '/utiliCv/' . "file_" . time() . '_' . $file->getClientOriginalName();
    //         $file->move(public_path('utiliCv'), $filePath);
    //         $utilisateur->cv = $filePath;
    //     }

    //     // Enregistrement d'un utilisateur
    //     if ($utilisateur->save()) {
    //         return back()->with('success', 'Utilisateur modifié avec succès.');
    //     } else {
    //         return back()->with('danger', 'Problème lors de la modification du contrat.');
    //     }
    // }

    public function update(Request $request, $id)
    {
        // Validation des données
        $request->validate([
            'email' => 'required|email|unique:utilisateurs,email,' . $id,
            'mdp' => 'nullable|min:4',
            'nom' => 'required|string|max:50',
            'prenom' => 'required|string|max:50',
            'telephone' => 'nullable|string|max:20',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'adresse' => 'nullable|string',
            'niveau' => 'nullable|string|max:50',
            'specialite' => 'nullable|string|max:50',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048'
        ]);

        $utilisateur = Utilisateur::find($id);

        if (!$utilisateur) {
            return back()->with('danger', 'Utilisateur non trouvé.');
        }

        $utilisateur->email = $request->input('email');

        if ($request->filled('mdp')) {
            $utilisateur->mdp = Hash::make($request->input('mdp'));
        }

        $utilisateur->nom = $request->input('nom');
        $utilisateur->prenom = $request->input('prenom');
        $utilisateur->telephone = $request->input('telephone');
        $utilisateur->adresse = $request->input('adresse');
        $utilisateur->niveau = $request->input('niveau');
        $utilisateur->specialite = $request->input('specialite');

        // Gestion de l'image de profil
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'utili/image_' . time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('utili'), $imagePath);
            $utilisateur->image = $imagePath;
        }

        // Gestion du CV
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = 'utili/file_' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('utili'), $filePath);
            $utilisateur->cv = $filePath;
        }

        // Enregistrement de l'utilisateur
        if ($utilisateur->save()) {
            return back()->with('success', 'Utilisateur modifié avec succès.');
        } else {
            return back()->with('danger', 'Problème lors de la modification de l\'utilisateur.');
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function textRegister(Request $request)
    {
        $messages = [
            "nom.required" => "Votre nom est requis",
            "nom.max" => "Votre nom est trop long",
            "prenom.required" => "Votre prénom est requis",
            "prenom.max" => "Votre prénom est trop long",
            "email.required" => "Votre email est requis",
            "email.unique" => "Votre email existe déjà",
            "mdp.required" => "Votre mot de passe est requis",
            "mdp.same" => "Les mots de passe ne correspondent pas",
        ];
        $validator = Validator::make($request->all(), [
            "nom" => "bail|required|max:50",
            "prenom" => "bail|required|max:50",
            "email" => "bail|required|email|unique:utilisateurs,email",
            "mdp" => "bail|required|min:4|same:re_password",
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $utilisateur = new Utilisateur();
        $utilisateur->nom = $request->nom;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->email = $request->email;
        $utilisateur->mdp = Hash::make($request->mdp);
        if ($utilisateur->save()) {
            return redirect()->route('index-login')->with('success', 'Compte créé avec succès');
        } else {
            return redirect()->back()->with('fail', 'Une erreur est survenue lors de la création du compte');
        }
    }


    public function textLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'mdp' => 'required',
        ]);
        $utilisateur = Utilisateur::where('email', '=', $request->email)->first();
        if ($utilisateur) {
            if (Hash::check($request->mdp, $utilisateur->mdp)) {
                $request->session()->put('utilisateurId', $utilisateur->id);
                $request->session()->put('utilisateurNom', $utilisateur->nom . ' ' . $utilisateur->prenom);
                return redirect('/utilisateur/dashboard');
            } else {
                return back()->with('fail', 'Utilisateur introuvable');
            }
        } else {
            return back()->with('fail', 'Utilisateur introuvable');
        }
    }

    public function logout(Request $request)
    {
        // Supprimer les informations de session
        $request->session()->forget('utilisateurId');
        $request->session()->forget('utilisateurNom');
        // Invalider la session pour assurer que toutes les données de session sont supprimées
        $request->session()->invalidate();
        // Regénérer le token CSRF
        $request->session()->regenerateToken();
        // Rediriger vers la page de connexion avec un message de succès
        return redirect('/Utilisateur/login')->with('success', 'Vous êtes déconnecté avec succès');
    }
}
