<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Contrat;
use App\Models\Domaine;
use App\Models\User;
use COM;
use Illuminate\Support\Facades\View;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        //
        $datas = Contrat::latest()->take(8)->get();
        $categories = Categorie::take(4)->get();
        $domaines = Domaine::all();
        return view('client.pages.index', compact('datas', 'categories', 'domaines'));
    }

    public function categorie()
    {
        //
        $datas = Categorie::all();
        return view('client.pages.categorie', compact('datas'));
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
    // public function show($categorie_id)
    // {
    //     //
    //     $datas = Contrat::all();
    //     $categorie = Categorie::with('contrat')->where('slug', '=', $categorie_id)->first();
    //     return view('client.pages.emploi', compact('categorie', 'datas'));
    // }

    public function contrat()
    {
        //
        $datas = Contrat::orderBy('created_at', 'asc')->paginate(16);
        return view('client.pages.contrat', compact('datas'));
    }


    public function show($categorie_id)
    {
        $categorie = Categorie::where('slug', '=', $categorie_id)->first();
        if ($categorie) {
            $datas = $categorie->contrats()->paginate(8);
        } else {
            $datas = collect(); // Collection vide
        }
        $categories = Categorie::orderBy('created_at', 'asc')->get();
        return view('client.pages.emploi', compact('categorie', 'datas', 'categories'));
    }


    // public function showContrat($slug)
    // {
    //     // Récupérer le contrat en utilisant le slug
    //     $contrat = Contrat::where('slug', $slug)->firstOrFail();
    //     // Retourner la vue avec le contrat
    //     return view('client.pages.detail', ['contrat' => $contrat]);
    // }

    public function showContrat($slug)
    {
        // Récupérer le contrat en utilisant le slug
        $contrat = Contrat::with(['domaine', 'typecontrat','categorie'])->where('slug', $slug)->firstOrFail();
        // dd($contrat->typecontrat);

        // Récupérer les contrats similaires avec le même domaine
        $contratsSimilaires = Contrat::where('domaine_id', $contrat->domaine_id)
            ->where('id', '!=', $contrat->id) // exclure le contrat actuel
            ->take(4) // ou toute autre limite que vous préférez
            ->get();

        // Retourner la vue avec le contrat et les contrats similaires
        return view('client.pages.detail', [
            'contrat' => $contrat,
            'datas' => $contratsSimilaires,
        ]);
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
    public function update(Request $request, $id)
    {
        //
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
}
