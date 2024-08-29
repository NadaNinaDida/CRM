<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Visite;
use Illuminate\Support\Facades\DB;

class VisitController extends Controller
{
    public function index()
    {
        $visits = Visite::with('client')->paginate(5);

        // $visits = Visite::all()->with('client');
        return view('visites', compact('visits'));

    }

        public function create()
{
    // Récupère tous les clients avec leurs noms concaténés
    $clients = Client::select(DB::raw("CONCAT(nom, ' ', prenom) AS full_name"), 'id')->get()->pluck('full_name', 'id');

    // dd($clients);

    return view('addVisit', compact('clients'));
}
public function store(Request $request){



    $visit = new Visite();
    $visit->client_id=$request->client_id;
    $visit->date_visite=$request->datev;
    $visit->objet=$request->objet;
    $visit->commentaire=$request->commentaires;
    $visit->save();
    return redirect()->back()->with('success', 'Fiche visit-client créé avec succès !');


}
public function edit($id){
    $visit = Visite::where('id',$id)->first();
    $clients = Client::select(DB::raw("CONCAT(nom, ' ', prenom) AS full_name"), 'id')->get()->pluck('full_name', 'id');
    return view('editVisit', compact('visit','clients'));
}
public function update(Request $request,$id){
    $visit=Visite::where('id',$id)->first();
    $visit->client_id=$request->client_id;
    $visit->date_visite=$request->datev;
    $visit->objet=$request->objet;
    $visit->commentaire=$request->commentaires;

    $visit->save();
    return redirect()->back()->with('success', 'La Visite est modifiée avec succès !');
}
public function destroy($id){
    $clients=Visite::where('id',$id)->first();
    $clients->delete();
    return redirect()->back()->with('success', 'La visite est suprimée avec succès !');

}
public function recherche(Request $request)
{

    $recherche = $request->input('recherche');
    $visits = Visite::with('client')->where('date_visite', 'like', "%$recherche%")
                     ->orWhere('objet', 'like', "%$recherche%")
                     ->orWhere('commentaire', 'like', "%$recherche%")
                     ->paginate(5);

    return view('visites', compact('visits'));
}

}
