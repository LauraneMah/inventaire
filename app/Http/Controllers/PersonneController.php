<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class PersonneController
 * @package App\Http\Controllers
 */
class PersonneController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnes = Personne::paginate();

        return view('personne.index', compact('personnes'))
            ->with('i', (request()->input('page', 1) - 1) * $personnes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personne = new Personne();
        return view('personne.create', compact('personne'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Personne::$rules);

        $personne = Personne::create($request->all());

        return redirect()->route('personnes.index')
            ->with('success', 'Personne created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personne = Personne::find($id);

        $personneMateriels = DB::table('materiels')
            ->select('materiels.description')
            ->join('materiel_personnes', 'materiels.id', '=', 'materiel_personnes.materiel_id')
            ->join('personnes', 'materiel_personnes.personne_id', '=', 'personnes.id')
            ->where('materiel_personnes.personne_id', '=', $personne['id'])
            -> get();

        return view('personne.show', compact('personne', 'personneMateriels'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personne = Personne::find($id);

        return view('personne.edit', compact('personne'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Personne $personne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personne $personne)
    {
        request()->validate(Personne::$rules);

        $personne->update($request->all());

        return redirect()->route('personnes.index')
            ->with('success', 'Personne updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $personne = Personne::find($id)->delete();

        return redirect()->route('personnes.index')
            ->with('success', 'Personne deleted successfully');
    }
}
