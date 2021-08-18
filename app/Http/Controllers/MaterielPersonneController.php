<?php

namespace App\Http\Controllers;

use App\Models\MaterielPersonne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class MaterielPersonneController
 * @package App\Http\Controllers
 */
class MaterielPersonneController extends Controller
{
    //FAIRE VARIABLE QUI RETOURNE LE MATERIEL TYPE WHERE TYPE = 2

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
        $materielPersonnes = MaterielPersonne::paginate();

        return view('materiel-personne.index', compact('materielPersonnes'))
            ->with('i', (request()->input('page', 1) - 1) * $materielPersonnes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personneName = DB::table('personnes')->pluck('name', 'id');

        $materielName = DB::table('materiels')->where('type_id', 1)->pluck('description','id');

        $materielPersonne = new MaterielPersonne();

        return view('materiel-personne.create', compact('personneName', 'materielName', 'materielPersonne'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MaterielPersonne::$rules);

        $materielPersonne = MaterielPersonne::create($request->all());

        return redirect()->route('materiel-personnes.index')
            ->with('success', 'MaterielPersonne created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materielPersonne = MaterielPersonne::find($id);

        return view('materiel-personne.show', compact('materielPersonne'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personneName = DB::table('personnes')->pluck('name', 'id');

        $materielName = DB::table('materiels')->where('type_id', 1)->pluck('description','id');

        $materielPersonne = MaterielPersonne::find($id);

        return view('materiel-personne.edit', compact('personneName', 'materielName','materielPersonne'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MaterielPersonne $materielPersonne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaterielPersonne $materielPersonne)
    {
        request()->validate(MaterielPersonne::$rules);

        $materielPersonne->update($request->all());

        return redirect()->route('materiel-personnes.index')
            ->with('success', 'MaterielPersonne updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $materielPersonne = MaterielPersonne::find($id)->delete();

        return redirect()->route('materiel-personnes.index')
            ->with('success', 'MaterielPersonne deleted successfully');
    }
}
