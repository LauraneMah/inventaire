<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use Illuminate\Http\Request;

/**
 * Class MaterielController
 * @package App\Http\Controllers
 */
class MaterielController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiels = Materiel::paginate();

        return view('materiel.index', compact('materiels'))
            ->with('i', (request()->input('page', 1) - 1) * $materiels->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materiel = new Materiel();
        return view('materiel.create', compact('materiel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Materiel::$rules);

        $materiel = Materiel::create($request->all());

        return redirect()->route('materiels.index')
            ->with('success', 'Materiel created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materiel = Materiel::find($id);

        return view('materiel.show', compact('materiel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materiel = Materiel::find($id);

        return view('materiel.edit', compact('materiel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Materiel $materiel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materiel $materiel)
    {
        request()->validate(Materiel::$rules);

        $materiel->update($request->all());

        return redirect()->route('materiels.index')
            ->with('success', 'Materiel updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $materiel = Materiel::find($id)->delete();

        return redirect()->route('materiels.index')
            ->with('success', 'Materiel deleted successfully');
    }
}
