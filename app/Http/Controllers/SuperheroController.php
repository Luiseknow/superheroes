<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    // Muestra la lista de todos los superhéroes
    public function index()
    {
        $superheroes = Superhero::all();
        return view('superheroes.index', compact('superheroes'));
    }

    // Muestra el formulario para crear uno nuevo
    public function create()
    {
        return view('superheroes.create');
    }

    // Guarda el superhéroe en la base de datos
    public function store(Request $request)
    {
        Superhero::create($request->all());
        return redirect()->route('superheroes.index');
    }

    // Muestra el perfil completo de un solo superhéroe
    public function show(Superhero $superhero)
    {
        return view('superheroes.show', compact('superhero'));
    }

    // Muestra el formulario para editar
    public function edit(Superhero $superhero)
    {
        return view('superheroes.edit', compact('superhero'));
    }

    // Actualiza los datos en la base de datos
    public function update(Request $request, Superhero $superhero)
    {
        $superhero->update($request->all());
        return redirect()->route('superheroes.index');
    }

    // Elimina el registro
    public function destroy(Superhero $superhero)
    {
        $superhero->delete();
        return redirect()->route('superheroes.index');
    }
}