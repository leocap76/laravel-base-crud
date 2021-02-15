<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Beer;

class BeerController extends Controller
{
     private $validation = [
        'name' => 'required|max:50',
        'category' => 'required|max:50',
        'price' => 'required|numeric',
        'abv' => 'required',
        'description' => 'required',
        'filepath' => 'required',
     ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers = Beer::all();

        // tradotto vede beers in home
        return view('home', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // this per riprenderla da una funzione esterna
        $request->validate($this->validation);

        $newBeer = new Beer;
        $newBeer->name = $data['name'];
        $newBeer->category = $data['category'];
        $newBeer->price = $data['price'];
        $newBeer->abv = $data['abv'];
        $newBeer->description = $data['description'];
        $newBeer->filepath = $data['filepath'];

        $newBeer-> save();

        return redirect()->route('birre.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beer = Beer::find($id);
      
        return view('beer', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beer = Beer::find($id);
        // dd($beer);
      // compact beer per riconoscerlo in pagina
        return view('edit', compact('beer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $beer = Beer::find($id);

        $request->validate($this->validation);

        $data = $request->all();
        $beer->update($data);
        return redirect()->route('birre.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $beer = Beer::find($id);

        $name = $beer->name;
        $beer->delete();

        return redirect()
            ->route('birre.index')
            ->with('message', 'birra'  .$name. 'eliminato correttamente!');
    }
}
