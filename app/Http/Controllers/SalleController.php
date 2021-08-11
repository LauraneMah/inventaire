<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;

/**
 * Class SalleController
 * @package App\Http\Controllers
 */
class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salles = Salle::paginate();

        return view('salle.index', compact('salles'))
            ->with('i', (request()->input('page', 1) - 1) * $salles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salle = new Salle();
        return view('salle.create', compact('salle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Salle::$rules);

        $salle = Salle::create($request->all());

        return redirect()->route('salles.index')
            ->with('success', 'Salle created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salle = Salle::find($id);

        return view('salle.show', compact('salle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salle = Salle::find($id);

        return view('salle.edit', compact('salle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Salle $salle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salle $salle)
    {
        request()->validate(Salle::$rules);

        $salle->update($request->all());

        return redirect()->route('salles.index')
            ->with('success', 'Salle updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $salle = Salle::find($id)->delete();

        return redirect()->route('salles.index')
            ->with('success', 'Salle deleted successfully');
    }
}
