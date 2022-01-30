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
use Illuminate\Support\Facades\Auth;

class CarrosController extends Controller
{

    public function indexhome()
    {
        $carros = Carros::all();
        return view('index',compact('carros'));
    }



    
    
    public function index()
    {
        $carros = Carros::all();
        return view('allcars',compact('carros'));
    }





    public function dashboard()
    {
        $carros = Carros::all();
        return view('cardatabase',compact('carros'));
    }





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





    public function store(Request $request)
    {
        $carro = new Carros;

        $carro->car_modelo = $request->car_modelo;
        $carro->car_ano = $request->car_ano;
        $carro->car_descrição = $request->car_descrição;
        $carro->car_link_imagem = $request->car_link_imagem;
        $carro->car_preco = $request->car_preco;
        $carro->car_kmrodados = $request->car_kmrodados;
        $carro->car_potencia = $request->car_potencia;
        $carro->car_cilindrada = $request->car_cilindrada;
        $carro->car_mar_codigo = $request->car_mar_codigo;
        $carro->car_cor_codigo = $request->car_cor_codigo;
        $carro->car_cat_codigo = $request->car_cat_codigo;
        $carro->car_tip_codigo = $request->car_tip_codigo;
        $carro->car_pos_codigo = $request->car_pos_codigo;
        $carro->car_tra_codigo = $request->car_tra_codigo;

        $carro->save();

        $isadmin = Auth::user()->is_admin; 
            switch ($isadmin) {
              case '1':
                return redirect('/admindashboard');
                break;
              case '0':
                return redirect('/dashboard');
                break; 
          
              default:
                return '/'; 
              break;
            }
    }





    public function show($car_codigo)
    {
        $carros = Carros::find($car_codigo);
        return view('car',compact('carros'));
    }





    public function edit($car_codigo)
    {
        $carros = Carros::find($car_codigo);

        $marcas = Marcas::all();
        $cores = Cores::all();
        $categorias = Categorias::all();
        $motores = Motores::all();
        $posicoes = Posicoes_Motores::all();
        $tracoes = Tipos_Tracao::all();

        return view('edit', compact('carros', 'marcas', 'cores', 'categorias', 'motores', 'posicoes', 'tracoes'));
    }





    public function update(Request $request, $car_codigo)
    {
        $carros = Carros::find($request->car_codigo)->update($request->all());

        $isadmin = Auth::user()->is_admin; 
            switch ($isadmin) {
              case '1':
                return redirect('/admindashboard');
                break;
              case '0':
                return redirect('/dashboard');
                break; 
          
              default:
                return '/'; 
              break;
            }
    }





    public function destroy($car_codigo)
    {
        Carros::findOrFail($car_codigo)->delete();

        $isadmin = Auth::user()->is_admin; 
            switch ($isadmin) {
              case '1':
                return redirect('/admindashboard');
                break;
              case '0':
                return redirect('/dashboard');
                break; 
          
              default:
                return '/'; 
              break;
            }
    }




    public function admindashboard()
    {
        $carros = Carros::all();
        return view('admindashboard',compact('carros'));
    }
}
