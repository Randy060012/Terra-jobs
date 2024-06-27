<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    //     $userId = session()->get('utilisateurId');
    //     $utilisateur = Utilisateur::find($userId);
    //     $datas = Experience::where('utilisateur_id', $userId)->get();
    //     return view('client.pages.experience', compact('datas','utilisateur'));
    // }

    public function index()
    {
        $userId = session()->get('utilisateurId');
        if (!$userId || !$utilisateur = Utilisateur::find($userId)) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour accéder à cette page.');
        }
        $datas = Experience::where('utilisateur_id', $userId)->get();
        return view('client.pages.experience', compact('datas', 'utilisateur'));
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
        // dd($request);
        $messages = [
            "utilisateur_id.required" => "L'utilisateur est requis.",
        ];

        // Validation des données
        $validated = $request->validate([
            'utilisateur_id' => 'required',
            'nom' => 'required',
            'annee' => 'required',
            'poste' => 'required',
            'description' => 'required',
        ], $messages);

        try {
            $experience = new Experience();
            $experience->fill($validated);

            if ($experience->save()) {
                return back()->with('success', 'Experience ajouté avec succès.');
            } else {
                return back()->with('danger', 'Problème lors de l\'ajout du Experience.');
            }
        } catch (\Exception $e) {
            return back()->with('danger', 'Erreur lors de l\'ajout : ' . $e->getMessage());
        }
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $messages = [
            "utilisateur_id.required" => "L'utilisateur est requis.",
        ];

        $experience_id = $request->input('experience_id');
        $experience = Experience::find($experience_id);

        if (!$experience) {
            return back()->with('danger', 'Experience non trouvée.');
        }

        // Validation des données
        $validated = $request->validate([
            'utilisateur_id' => 'required',
            'nom' => 'required',
            'annee' => 'required',
            'poste' => 'required',
            'description' => 'required',
        ], $messages);

        // Mise à jour de l'experience existante
        $experience->fill($validated);

        try {
            if ($experience->save()) {
                return back()->with('success', 'Experience modifiée avec succès.');
            } else {
                return back()->with('danger', 'Problème lors de la modification de l\'Experience.');
            }
        } catch (\Exception $e) {
            return back()->with('danger', 'Erreur lors de la sauvegarde : ' . $e->getMessage());
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
        $experience = Experience::find($id);
        if (!$experience) {
            return back()->with('danger', 'Experience non trouvée');
        }
        if ($experience->delete()) {
            return back()->with('success', 'Experience supprimé avec succès');
        } else {
            return back()->with('danger', 'Problème lors de la suppression d\'une Experience');
        }
    }
}
