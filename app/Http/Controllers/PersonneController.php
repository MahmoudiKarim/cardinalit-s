<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use App\Http\Requests\StorePersonneRequest;
use App\Http\Requests\UpdatePersonneRequest;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Personne $personne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personne $personne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonneRequest $request, Personne $personne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personne $personne)
    {
        //
    }
}
