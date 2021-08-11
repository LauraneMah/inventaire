<?php

namespace App\Http\Controllers;

use App\Models\Declassee;
use Illuminate\Http\Request;

/**
 * Class DeclasseeController
 * @package App\Http\Controllers
 */
class DeclasseeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $declassees = Declassee::paginate();

        return view('declassee.index', compact('declassees'))
            ->with('i', (request()->input('page', 1) - 1) * $declassees->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $declassee = new Declassee();
        return view('declassee.create', compact('declassee'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Declassee::$rules);

        $declassee = Declassee::create($request->all());

        return redirect()->route('declassees.index')
            ->with('success', 'Declassee created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $declassee = Declassee::find($id);

        return view('declassee.show', compact('declassee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $declassee = Declassee::find($id);

        return view('declassee.edit', compact('declassee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Declassee $declassee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Declassee $declassee)
    {
        request()->validate(Declassee::$rules);

        $declassee->update($request->all());

        return redirect()->route('declassees.index')
            ->with('success', 'Declassee updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $declassee = Declassee::find($id)->delete();

        return redirect()->route('declassees.index')
            ->with('success', 'Declassee deleted successfully');
    }
}
