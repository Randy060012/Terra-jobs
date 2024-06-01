<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Domaine;
use Illuminate\Http\Request;

class DomaineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Domaine::all();
        return view('admin.pages.domaine.index', compact('datas'));
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
        $domaine = new Domaine();
        $domaine->libelle = $validatedData['libelle'];
        $domaine->description = $validatedData['description'];

        if ($domaine->save()) {
            return back()->with('success', 'Domaine ajoutée avec succès');
        } else {
            return back()->with('danger', 'Problème lors de l\'ajout d\'un Domaine');
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
        $domaine_id = $request->input('domaine_id');
        $domaine = Domaine::find($domaine_id);
        if (!$domaine) {
            return back()->with('danger', 'Domaine non trouvé');
        }
        $domaine->libelle = $validatedData['libelle'];
        $domaine->description = $validatedData['description'];

        if ($domaine->save()) {
            return back()->with('success', 'Domaine modifiée avec succès');
        } else {
            return back()->with('danger', 'Problème lors de la modification d\'un Domaine');
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
        $domaine = Domaine::find($id);
        if (!$domaine) {
            return back()->with('danger', 'domaine non trouvée');
        }
        if ($domaine->delete()) {
            return back()->with('success', 'domaine supprimé avec succès');
        } else {
            return back()->with('danger', 'Problème lors de la suppression d\'un domaine');
        }
    }
}
