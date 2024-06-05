<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Contrat;
use App\Models\Domaine;
use App\Models\TypeDeContrat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Contrat::all();
        $categories = Categorie::all();
        $domaines = Domaine::all();
        $types = TypeDeContrat::all();
        $users = User::all();
        return view('admin.pages.contrat.index', compact('datas', 'categories', 'domaines', 'types', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datas = Contrat::all();
        $categories = Categorie::all();
        $domaines = Domaine::all();
        $types = TypeDeContrat::all();
        $users = User::all();
        return view('admin.pages.contrat.add', compact('datas', 'categories', 'domaines', 'types', 'users',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $messages = [
            "user_id.required" => "L'utilisateur est requis.",
            'domaine_id.required' => "Le domaine est requis.",
            'type_de_contrat_id.required' => "Le type de contrat est requis.",
            'categorie_id.required' => "La catégorie est requise.",
        ];

        // Validation des données
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'domaine_id' => 'required',
            'type_de_contrat_id' => 'required',
            'categorie_id' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Création d'une nouvelle instance de Contrat
        $contrat = new Contrat();
        $contrat->user_id = $request->input('user_id');
        $contrat->domaine_id = $request->input('domaine_id');
        $contrat->type_de_contrat_id = $request->input('type_de_contrat_id');
        $contrat->categorie_id = $request->input('categorie_id');
        $contrat->titre = $request->input('titre');
        $contrat->description = $request->input('description');
        $contrat->date_limite = $request->input('date_limite');
        // Génération du slug
        $contrat->slug = Str::slug($contrat->titre);

        // Gestion de l'image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = '/produitImage/' . "images" . time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('produitImage'), $imagePath);
            $contrat->image = $imagePath;
        }

        if ($request->hasFile('fichier')) {
            $file_image = $request->file('fichier');
            $file_name_image = "file" . time() . '_' . $file_image->getClientOriginalName();
            $file_image->move(public_path('produitImage'), $file_name_image);
            $contrat->fichier = $file_name_image;
        }

        // Enregistrement du contrat
        if ($contrat->save()) {
            return back()->with('success', 'Contrat ajouté avec succès.');
        } else {
            return back()->with('danger', 'Problème lors de l\'ajout du contrat.');
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
        // Récupère le contrat spécifique par son ID
        $data = Contrat::find($id);
        $categories = Categorie::all();
        $domaines = Domaine::all();
        $types = TypeDeContrat::all();
        $users = User::all();
        return view('admin.pages.contrat.edit', compact('data', 'categories', 'domaines', 'types', 'users'));
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
        //
        //dd($request);
        $contrat = Contrat::find($id);
        $contrat->user_id = $request->input('user_id');
        $contrat->domaine_id = $request->input('domaine_id');
        $contrat->type_de_contrat_id = $request->input('type_de_contrat_id');
        $contrat->categorie_id = $request->input('categorie_id');
        $contrat->titre = $request->input('titre');
        $contrat->description = $request->input('description');
        $contrat->date_limite = $request->input('date_limite');
        // Génération du slug
        $contrat->slug = Str::slug($contrat->titre);

        // Gestion de l'image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = '/produitImage/' . "images" . time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('produitImage'), $imagePath);
            $contrat->image = $imagePath;
        }

        // Gestion du fichier
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = '/uploadedFiles/' . "file_" . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploadedFiles'), $filePath);
            $contrat->fichier = $filePath;
        }

        // Enregistrement du contrat
        if ($contrat->save()) {
            return back()->with('success', 'Contrat modifié avec succès.');
        } else {
            return back()->with('danger', 'Problème lors de la modification du contrat.');
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
        $contrat = Contrat::find($id);
        if (!$contrat) {
            return back()->with('danger', 'contrat non trouvée');
        }
        if ($contrat->delete()) {
            return back()->with('success', 'contrat supprimé avec succès');
        } else {
            return back()->with('danger', 'Problème lors de la suppression d\'un contrat');
        }
    }
}
