<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carros;
use App\Models\Marcas;
use App\Models\Cores;
use App\Models\Categorias;
use App\Models\Motores;
use App\Models\Posicoes_Motores;
use App\Models\Tipos_Tracao;

class CarrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carros = Carros::all();
        return view('allcars',compact('carros'));
    }

    public function cadastro()
    {
        return view('Cadastro');
    }

    public function dash()
    {
        $carros = Carros::all();
        return view('dash',compact('carros'));
    }

    public function indexhome()
    {
        $carros = Carros::all();
        return view('index',compact('carros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marcas::all();
        $cores = Cores::all();
        $categorias = Categorias::all();
        $motores = Motores::all();
        $posicoes = Posicoes_Motores::all();
        $tracoes = Tipos_Tracao::all();
        return view('create', compact('marcas', 'cores', 'categorias', 'motores', 'posicoes', 'tracoes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::create($request->all());

        return 'hally';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($car_codigo)
    {
        $carros = Carros::find($car_codigo);
        return view('car',compact('carros'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
