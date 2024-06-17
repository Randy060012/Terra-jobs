<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Education::all();
        $utilisateurs = Utilisateur::all();
        return view('client.pages.education', compact('datas', 'utilisateurs'));
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
            'universite' => 'required',
            'annee' => 'required',
            'description' => 'required',
        ], $messages);

        try {
            $education = new Education();
            $education->fill($validated);

            if ($education->save()) {
                return back()->with('success', 'Education ajouté avec succès.');
            } else {
                return back()->with('danger', 'Problème lors de l\'ajout du Education.');
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

        $education_id = $request->input('education_id');
        $education = Education::find($education_id);

        if (!$education) {
            return back()->with('danger', 'Éducation non trouvée.');
        }

        // Validation des données
        $validated = $request->validate([
            'utilisateur_id' => 'required',
            'universite' => 'required',
            'annee' => 'required',
            'description' => 'required',
        ], $messages);

        // Mise à jour de l'éducation existante
        $education->fill($validated);

        try {
            if ($education->save()) {
                return back()->with('success', 'Éducation modifiée avec succès.');
            } else {
                return back()->with('danger', 'Problème lors de la modification de l\'éducation.');
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
        $education = Education::find($id);
        if (!$education) {
            return back()->with('danger', 'Education non trouvée');
        }
        if ($education->delete()) {
            return back()->with('success', 'Education supprimé avec succès');
        } else {
            return back()->with('danger', 'Problème lors de la suppression d\'une Education');
        }
    }
}
