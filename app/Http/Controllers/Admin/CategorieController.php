<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Categorie::all();
        return view('admin.pages.categorie.index', compact('datas'));
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
        $validatedData = $request->validate([
            'libelle' => 'required',
            'description' => 'required',
        ]);
        $categorie = new Categorie();
        $categorie->libelle = $validatedData['libelle'];
        $categorie->description = $validatedData['description'];

        // Génération du slug
        $categorie->slug = Str::slug($categorie->libelle);

        if ($categorie->save()) {
            return back()->with('success', 'Categorie ajoutée avec succès');
        } else {
            return back()->with('danger', 'Problème lors de l\'ajout d\'un Categorie');
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
        //
        $validatedData = $request->validate([
            'libelle' => 'required',
            'description' => 'required',
        ]);
        $categorie_id = $request->input('categorie_id');
        $categorie = Categorie::find($categorie_id);
        if (!$categorie) {
            return back()->with('danger', 'Categorie non trouvé');
        }
        $categorie->libelle = $validatedData['libelle'];
        $categorie->description = $validatedData['description'];
        // Génération du slug
        $categorie->slug = Str::slug($categorie->libelle);

        if ($categorie->save()) {
            return back()->with('success', 'Categorie modifiée avec succès');
        } else {
            return back()->with('danger', 'Problème lors de la modification d\'un Categorie');
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
        $categorie = Categorie::find($id);
        if (!$categorie) {
            return back()->with('danger', 'Categorie non trouvée');
        }
        if ($categorie->delete()) {
            return back()->with('success', 'Categorie supprimé avec succès');
        } else {
            return back()->with('danger', 'Problème lors de la suppression d\'un Categorie');
        }
    }
}
