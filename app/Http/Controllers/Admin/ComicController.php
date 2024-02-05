<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();


        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $this->validation($request->all());

        $comic = new Comic();

        $comic->fill($data);

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $comic = Comic::findOrFail($id);

        $data = [
            'comic' => $comic
        ];


        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        $data = $this->validation($request->all());

        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {

        $comic->delete();

        return redirect()->route('comics.index');
    }

    public function validation($data)
    {

        $validator = Validator::make($data, [

            'immagine' => 'required|url|ends_with:png,jpg,webp|max:300',
            'titolo' => 'required|max:40',
            'serie' => 'required|max:40',
            'data_di_vendita' => 'required|date',
            'prezzo' => 'required|numeric|min:1|max:100',
            'descrizione' => 'required|max:500',

        ], [

            'immagine.required' => 'Immagine è obbligatorio.',
            'titolo.required' => 'Il titolo è obbligatorio.',
            'serie.required' => 'La serie è obbligatorio.',
            'data_di_vendita.required' => 'la data di vendita è obbligatorio.',
            'prezzo.required' => 'Il prezzo è obbligatorio.',
            'descrizione.required' => 'La descrizione è obbligatorio.',

        ])->validate();

        return $validator;
    }
}
