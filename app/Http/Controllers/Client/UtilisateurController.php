<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Experience;
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
        $userId = session()->get('utilisateurId');
        $utilisateur = Utilisateur::find($userId);
        return view('client.pages.dashboard', compact('utilisateur'));
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
    public function show()
    {
        // Récupérer l'utilisateur connecté en utilisant son ID de session
        $utilisateurId = session()->get('utilisateurId');
        $data = Utilisateur::with(['education', 'experience'])->find($utilisateurId);
        // Vérifier si l'utilisateur a été trouvé
        if (!$data) {
            // Vous pouvez rediriger l'utilisateur ou afficher une page d'erreur ici
            return redirect()->route('errorPage')->with('error', 'Utilisateur non trouvé');
        }
        // Passer les données de l'utilisateur à la vue
        return view('client.pages.profil', compact('data'));
    }


    public function portfolio($id)
    {
        $data = Utilisateur::with(['education', 'experience'])->where('email','=',$id)->first();
        // Vérifier si l'utilisateur a été trouvé
        if (!$data) {
            // Vous pouvez rediriger l'utilisateur ou afficher une page d'erreur ici
            return redirect()->route('errorPage')->with('error', 'Utilisateur non trouvé');
        }
        // Passer les données de l'utilisateur à la vue
        return view('client.pages.profil', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        $data = Utilisateur::find(session()->get('utilisateurId'));
        // $userId = session()->get('utilisateurId');
        $utilisateur = $data;
        return view('client.pages.utilisateur', compact('data','utilisateur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'carriere'=>'nullable|string|max:500'
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
        $utilisateur->carriere = $request->input('carriere');
        // Gestion de l'image de profil
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'utilisateurFile/images_' . time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('utilisateurFile'), $imagePath);
            $utilisateur->image = $imagePath;
        }
        // Gestion du CV
        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $filePath = 'utilisateurFile/file_' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('utilisateurFile'), $filePath);
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

    public function getIdUtilisateur(Request $request)
    {
        // Vérifie si l'ID de l'utilisateur est stocké dans la session
        if ($request->session()->has('utilisateurId')) {
            // Récupère l'ID de l'utilisateur depuis la session
            $userId = $request->session()->get('utilisateurId');
            // Retourne l'ID en format JSON avec un statut HTTP 200
            return response()->json(['id' => $userId], 200);
        } else {
            // Si aucun utilisateur n'est connecté, retourne une réponse d'erreur avec un statut HTTP 401 (Non autorisé)
            return response()->json(['error' => 'Utilisateur non connecté'], 401);
        }
    }
}
