<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TypeDeContrat;
use Illuminate\Http\Request;
use SebastianBergmann\Comparator\TypeComparator;

class TyeContratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = TypeDeContrat::all();
        return view('admin.pages.type-contrat.index', compact('datas'));
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
        $type = new TypeDeContrat();
        $type->libelle = $validatedData['libelle'];
        $type->description = $validatedData['description'];

        if ($type->save()) {
            return back()->with('success', 'Type de contrat ajoutée avec succès');
        } else {
            return back()->with('danger', 'Problème lors de l\'ajout d\'un Type de contrat');
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
        $type_id = $request->input('type_id');
        $type = TypeDeContrat::find($type_id);
        if (!$type) {
            return back()->with('danger', 'Type de contrat non trouvé');
        }
        $type->libelle = $validatedData['libelle'];
        $type->description = $validatedData['description'];

        if ($type->save()) {
            return back()->with('success', 'Type de contrat modifiée avec succès');
        } else {
            return back()->with('danger', 'Problème lors de la modification d\'un Type de contrat');
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
        $type = TypeDeContrat::find($id);
        if (!$type) {
            return back()->with('danger', 'Type de contrat non trouvée');
        }
        if ($type->delete()) {
            return back()->with('success', 'Type de contrat supprimé avec succès');
        } else {
            return back()->with('danger', 'Problème lors de la suppression d\'un Type de contrat');
        }
    }
}
