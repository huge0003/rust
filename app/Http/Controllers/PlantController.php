<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Renders the latest data from the foo table
        $data = $request->validate([
            'name' => ['nullable'],
            'type' => ['nullable'],
            'search' => ['nullable']
        ]);

        $plants = Plant::all();

        $query = (new Plant)->newQuery();

        if (isset($data['search'])) {
            $search = $data['search'];
            // Search in the title and body columns from the posts table
            $filter_plants = Plant::query()
                ->where('name', 'LIKE', "%{$search}%")
                ->get();
            // Return the search view with the resluts compacted
            return view('home', compact('plants', 'data', 'filter_plants'));
        }

        if (isset($data['type'])) {
            $query->where('type', '=', $data['type']);
        }

        $filter_plants = $query->latest()->get();

        return view('home', compact('plants', 'data', 'filter_plants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Plant $plant
     * @return \Illuminate\Http\Response
     */
    // public function show(Plant $plant)
    public function show($id)
    {
        $plants = \App\Plant::find($id);
        return view('/show', compact('plants'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Plant $plant
     * @return \Illuminate\Http\Response
     */
    public function edit(Plant $plant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Plant $plant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plant $plant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Plant $plant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plant $plant)
    {
      $word = "hi";
    }
}
