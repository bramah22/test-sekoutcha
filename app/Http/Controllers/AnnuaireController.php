<?php

namespace App\Http\Controllers;

use App\Annuaire;
use Illuminate\Http\Request;

class AnnuaireController extends Controller
{

    public function index()
    {
        $annuaires = Annuaire::all();
        return view('index', compact('annuaires'));
    }


    public function create() {

        return view('create');
    }

    public function store(Request $request)
    {
        Annuaire::create($request->all());

        return redirect()->to('/');
    }


    public function destroy($id)
    {

        Annuaire::where('id', '=', $id)->delete();
        return redirect()->to('/');

    }
}
