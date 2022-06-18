<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderByDesc('id')->get();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* visualizzare le richieste */

        /* dd($request->all()); */

        /* validare i dati */
        $validated_data= $request->validate([
            'title'=>'required|max:100',
            'description'=>'nullable',
            'thumb'=>'required',
            'price'=>'nullable',
            'series'=>'nullable',
            'sale_date'=>'nullable',
            'type'=>'nullable'

        ]);
        
        /* dd($validated_data); */

        /* creazione istanza del modello */

       /*  $comic = new Comic();
        $comic-> title = $request -> title;
        $comic-> description = $request -> description;
        $comic-> thumb = $request ->thumb;
        $comic -> price = $request -> price;
        $comic -> series = $request ->series;
        $comic-> sale_date = $request->sale_date;
        $comic-> type = $request->type;
        $comic -> save(); */

        /* $validated_data = $request->validated(); */

        Comic::create($validated_data);
        

        /* pattern POST-REDIRECT-GET */
        return redirect()->route('comics.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {   
        /* dd($comic); */
        return view ('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view ('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
       /* dd($request->all()); */

       /* validazione dei dati */
       $validated_data= $request->validate([
        'title'=>'required|max:100',
        'description'=>'nullable',
        'thumb'=>'required',
        'price'=>'nullable',
        'series'=>'nullable',
        'sale_date'=>'nullable',
        'type'=>'nullable'

    ]);

       
       $comic->update($validated_data);

       return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');

    }
}
