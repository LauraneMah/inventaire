<?php

namespace App\Http\Controllers;

use App\Models\TypeMateriel;
use Illuminate\Http\Request;

/**
 * Class TypeMaterielController
 * @package App\Http\Controllers
 */
class TypeMaterielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeMateriels = TypeMateriel::paginate();

        return view('type-materiel.index', compact('typeMateriels'))
            ->with('i', (request()->input('page', 1) - 1) * $typeMateriels->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeMateriel = new TypeMateriel();
        return view('type-materiel.create', compact('typeMateriel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TypeMateriel::$rules);

        $typeMateriel = TypeMateriel::create($request->all());

        return redirect()->route('type-materiels.index')
            ->with('success', 'TypeMateriel created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typeMateriel = TypeMateriel::find($id);

        return view('type-materiel.show', compact('typeMateriel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typeMateriel = TypeMateriel::find($id);

        return view('type-materiel.edit', compact('typeMateriel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TypeMateriel $typeMateriel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeMateriel $typeMateriel)
    {
        request()->validate(TypeMateriel::$rules);

        $typeMateriel->update($request->all());

        return redirect()->route('type-materiels.index')
            ->with('success', 'TypeMateriel updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $typeMateriel = TypeMateriel::find($id)->delete();

        return redirect()->route('type-materiels.index')
            ->with('success', 'TypeMateriel deleted successfully');
    }
}
