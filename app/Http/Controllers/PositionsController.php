<?php

namespace App\Http\Controllers;

use App\Models\Positions;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DataTables;

class PositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions = Positions::select('id', 'position','max_position','description')->get();
        return view('dashboard.modules.hrms.positions.index', compact('positions'));
    }

    /**
     * Display a listing of the resource.
     */
    public function list()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Positions $positions): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Positions $positions): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Positions $positions): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Positions $positions): RedirectResponse
    {
        //
    }
}
