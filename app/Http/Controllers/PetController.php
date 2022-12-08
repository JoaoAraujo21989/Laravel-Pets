<?php

namespace App\Http\Controllers;

use App\Person;
use App\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $pets = Pet::orderBy('id', 'desc')->get();
        return view('pages.pets.indexPet', ['pets' => $pets]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $person = Person::all();
        return view('pages.pets.createPet', ['person'=>$person]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $this->validate($request, [
        //  form name           requisições
            'name'          => 'required',
            'color'         => 'required',
            'birth_date'    => 'required',
            'person'        => 'required'
        ]);

        // BD                   form name
        $pet                 = new Pet();
        $pet->name           = $request->name;
        $pet->color          = $request->color;
        $pet->birth_date     = $request->birth_date;
        $pet->person_id      = $request->person;
        $pet->save();

        return redirect('pets')->with('status','Item created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pet  $pet
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Pet $pet)
    {
        return view('pages.pets.showPet', ['pet' => $pet]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pet  $pet
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Pet $pet)
    {
        $person = Person::all();
        return view('pages.pets.editPet', ['pet' => $pet, 'person'=>$person]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pet  $pet
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Pet $pet)
    {
        // BD                   form name
        $pet                 = Pet::find($pet->id);
        $pet->name           = $request->name;
        $pet->color          = $request->color;
        $pet->birth_date     = $request->birth_date;
        $pet->person_id      = $request->person;
        $pet->save();

        return redirect('pets')->with('status','Item edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pet  $pet
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Pet $pet)
    {
        $pet = Pet::find($pet->id);
        $pet->delete();
        return redirect('pets')->with('status','Item deleted successfully!');
    }
}
