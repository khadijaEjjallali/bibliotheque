<?php

namespace App\Http\Controllers;
use App\Models\Livre;
use App\Models\Auteur;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livres = Livre::all();
        return view('livres.index',compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $auteurs = Auteur::all();
        return view('livres.create',compact('auteurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $request->validate([
    'titre' => 'required|string|max:200',
    'auteur_id' => 'required|exists:auteurs,id',
    'isbn' => 'required|string|max:20|unique:livres,isbn',
    'prix' => 'required|numeric|min:0',
]);
    $livre = new Livre();

    $livre->titre = $request->titre;
    $livre->auteur_id = $request->auteur_id;
    $livre->isbn = $request->isbn;
    $livre->prix = $request->prix;

    $livre->save();
    return redirect()->route('Livres.index');
}
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $livre =Livre::find($id);
        return view('Livres.show', compact('livre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $livre = Livre::find($id);
        $auteurs = Auteur::all();
        return view('Livres.edit' , compact('livre','auteurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
    'titre' => 'required|string|max:200',
    'auteur_id' => 'required|exists:auteurs,id',
    'isbn' => [
        'required',
        'string',
        'max:20',
        Rule::unique('livres', 'isbn')->ignore($id),
    ],
    'prix' => 'required|numeric|min:0',
]);
    $livre = Livre::find($id);

    $livre->titre = $request->titre;
    $livre->auteur_id = $request->auteur_id;
    $livre->isbn = $request->isbn;
    $livre->prix = $request->prix;

    $livre->save();

    return redirect()->route('Livres.index');
}
    /**
     * Remove the specified resource from storage.
     */
   public function destroy(string $id)
{
    $livre = Livre::find($id);

    $livre->delete();

    return redirect()->route('Livres.index');
}
}
