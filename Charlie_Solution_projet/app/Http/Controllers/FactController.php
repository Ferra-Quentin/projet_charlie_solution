<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fact;

class FactController extends Controller
{
    /**
     * Récupération de tout les facts dans la base de donnée
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facts = Fact::all();
        return view('voir_les_facts', compact('facts'));
    }

    /**
     * Renvoit vers le formulaire qui permet de créer/rajouter une fact/donnée
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form_creation');
    }

    /**
     * Ajoute/Stocke la fact créer grâce au formulaire que renvoit create() dans la BDD
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'fact' => 'required|unique:facts,fact',
        ]);

        Fact::create([
            'fact' => $request->fact
        ]);

        return redirect()->route('voir_les_facts');
    }

    /**
     *Ajoute dans la base de donnée les données reçu de l'API
     *
     * @param  string $fact
     */
    public static function ajout_donnee_api($fact){


        Fact::create([
            'fact' => $fact
        ]);

        return redirect()->route('voir_les_facts');
    }

    /**
     * Affiche la fact selon l'id envoyé dans la requette HTTP
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fact = Fact::findOrFail($id);

        return view('voir_la_fact', compact('fact'));
    }

    /**
     * Affiche le formulaire pour modifier
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fact = Fact::findOrFail($id);
        return view('form_mise_a_jour', compact('fact'));
    }

    /**
     * Mise a jour de la fact qui est envoyé dans la Request
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=null)
    {

        $request->validate([
            'id' => 'required',
            'fact' => 'required|unique:facts,fact|max:65000'
        ]);

        $fact = Fact::findOrFail($request->id);

        $fact->update([
            'fact' => $request->fact
        ]);

        $fact->save();
        return redirect()->route('voir_les_facts');
    }

    /**
     * Supprime la fact dont l'id est passé en paramètre
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fact = Fact::findOrFail($id);
        $fact->delete();
        return redirect()->route('voir_les_facts');
    }

    /**
     * Supprime toute les données de la base de donnée
     *
     * @return \Illuminate\Http\Response
     */
    public function delete_all(){
        Fact::truncate();
        return redirect()->route('voir_les_facts');
    }
}
