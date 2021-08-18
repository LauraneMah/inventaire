<?php

namespace App\Http\Controllers;

use App\Models\MaterielSalle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MaterielSallesExport;


/**
 * Class MaterielSalleController
 * @package App\Http\Controllers
 */
class MaterielSalleController extends Controller
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
        $materielSalles = MaterielSalle::paginate();

        return view('materiel-salle.index', compact('materielSalles'))
            ->with('i', (request()->input('page', 1) - 1) * $materielSalles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salleName = DB::table('salles')->pluck('name', 'id');

        $materielName = DB::table('materiels')->where('type_id', 2)->pluck('description','id');

        $materielSalle = new MaterielSalle();

        return view('materiel-salle.create', compact( 'salleName', 'materielName', 'materielSalle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MaterielSalle::$rules);

        $materielSalle = MaterielSalle::create($request->all());

        return redirect()->route('materiel-salles.index')
            ->with('success', 'MaterielSalle created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materielSalle = MaterielSalle::find($id);

        return view('materiel-salle.show', compact('materielSalle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salleName = DB::table('salles')->pluck('name', 'id');

        $materielName = DB::table('materiels')->where('type_id', 2)->pluck('description','id');

        $materielSalle = MaterielSalle::find($id);

        return view('materiel-salle.edit', compact('salleName', 'materielName', 'materielSalle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MaterielSalle $materielSalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaterielSalle $materielSalle)
    {
        request()->validate(MaterielSalle::$rules);

        $materielSalle->update($request->all());

        return redirect()->route('materiel-salles.index')
            ->with('success', 'MaterielSalle updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $materielSalle = MaterielSalle::find($id)->delete();

        return redirect()->route('materiel-salles.index')
            ->with('success', 'MaterielSalle deleted successfully');
    }


    public function fileExport()
    {
        return Excel::download(new MaterielSallesExport, 'materiel-salles-collection.csv');
    }
}


