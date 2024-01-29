<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

use App\Http\Requests\EleveSaveRequest;

class EleveController extends Controller
{
    //
    public function index(){
        //il faut mettres vos table en pluriels sinon vous serez obliger daller modifier dans model Article
        $eleves = Eleve::all();
        return view("eleves.index", compact("eleves"));
    }

    public function edit(Eleve $eleve)
    {
        return view('eleves.edit',compact('eleve'));

    }

    public function delete($id)
    {
        Eleve::find($id)->delete();
        return redirect()->route('eleves.index')->with('success', 'L\'eleve a été suprimé avec succès.');

    }

    public function restaure($id){
        $eleve = Eleve::withTrashed()->find($id);

        if ($eleve) {
            $eleve->restore();
            return redirect()->route('eleves.index')->with('success', 'L\'eleve a été restauré avec succès.');
        }
    }

    function trashAll(){
        $eleve =  Eleve::withTrashed();
        if ($eleve) {
            $eleve->forceDelete();
            return redirect()->route('eleves.index')->with('success', 'L\'eleve a été restauré avec succès.');
        }

    }

    public function corbeille() {

        $eleves = Eleve::onlyTrashed()->get(); // Get only soft-deleted articles
        return view("eleves.trash",compact("eleves"));
    }

    public function deletePermenant($id){
        $eleve =  Eleve::withTrashed()->find($id);
        if ($eleve) {
            $eleve->forceDelete();
            return redirect()->route('eleves.index')->with('success', 'L\'eleve a été restauré avec succès.');
        }

    }
    public function addProduit(){
        return view("eleves.formAdd");
    }

    public function saveProduit(EleveSaveRequest $request){
        /*
        $eleve = new Eleve();
        $eleve->nom= request()->nom;
        $eleve->prenom= request()->prenom;
        $eleve->tuteur= request()->tuteur;
        $eleve->sexe= request()->sexe;
        $eleve->age= request()->age;
        $eleve->adresse= request()->adresse;
        $eleve->save();
        */
       //ou

       $data = $request->only(['nom','prenom','tuteur', 'sexe','age','adresse']);

       Eleve::create($data);

       return redirect()->route('eleves.index')->with('success', 'L\'article a été ajouté avec succès.');

   }
   public function show($id)
   {

       $eleve = Eleve::find($id);

       return view('eleves.show',compact("eleve"));
   }


   public function searchByTuteur(Request $request)
    {

        $tuteur = $request->input('tuteur');

        $eleves = Eleve::where('tuteur', 'like', "%$tuteur%")->get();

        return view('eleves.index', compact('eleves'));
    }


}
