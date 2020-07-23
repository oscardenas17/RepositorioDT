<?php

namespace App\Http\Controllers;

use App\Repositorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RepositorioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('repositorios.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //DB::table('categoria_repositorio')->get()->pluck('nombre','id')->dd();
        //
        $categorias = DB::table('categoria_repositorio')->get()->pluck('nombre','id');

        return view('repositorios.create')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'titulo'=> 'required|min:6',
            'contenido' => 'required',
            'imagen' => 'image',
            'categoria' => 'required',
        ]);
        DB::table('repositorios')->insert([
            'titulo' => $data['titulo'],
            'contenido' => $data['contenido'],
            'imagen' => 'imagen.jpg',
            'user_id' => 1,
            'categoria_id' => $data['categoria'],
        ]);
        //dd imprime todo lo que haga parte el request
        //dd( $request->all());
        //REDIRECCIONAR
            return redirect()->action('RepositorioController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Repositorio  $repositorio
     * @return \Illuminate\Http\Response
     */
    public function show(Repositorio $repositorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Repositorio  $repositorio
     * @return \Illuminate\Http\Response
     */
    public function edit(Repositorio $repositorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Repositorio  $repositorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Repositorio $repositorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Repositorio  $repositorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repositorio $repositorio)
    {
        //
    }
}
