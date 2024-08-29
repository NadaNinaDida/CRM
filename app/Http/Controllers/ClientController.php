<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=Client::paginate(5);

        return view('layout', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view ('addClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCli=new Client();
        $newCli->nom=$request->nom;
        $newCli->prenom=$request->prenom;
        $newCli->adresse=$request->adresse;
        $newCli->email=$request->email;
        $newCli->tel=$request->tel;
        $newCli->profession=$request->profession;
        // $newCli->commentaire=$request->commentaire;
        $newCli->save();
        return redirect()->back()->with('success', 'Client créé avec succès !');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients=Client::where('id',$id)->first();
        return view('showClient', compact('clients'));
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
      $clients=Client::where('id',$id)->first();
      $clients->nom=$request->nom;
      $clients->prenom=$request->prenom;
      $clients->email=$request->email;
      $clients->tel=$request->tel;
      $clients->adresse=$request->adresse;
      $clients->profession=$request->profession;
      $clients->save();
      return redirect()->back()->with('success', 'Client modifié avec succès !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clients=Client::where('id',$id)->first();
        $clients->delete();
        return redirect()->back()->with('success', 'Client suprimé avec succès !');

    }

    public function recherche(Request $request)
{
    $recherche = $request->input('recherche');
    $clients = Client::where('nom', 'like', "%$recherche%")
                     ->orWhere('prenom', 'like', "%$recherche%")
                     ->orWhere('tel', 'like', "%$recherche%")
                     ->orWhere('email', 'like', "%$recherche%")
                     ->orWhere('adresse', 'like', "%$recherche%")
                     ->orWhere('profession', 'like', "%$recherche%")
                     ->paginate(5);

    return view('layout', compact('clients'));
}
}
