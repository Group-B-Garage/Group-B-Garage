<!doctype html>
<html lang="en">
  <head>
     <title>GB Garage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <img src="{{ URL::asset('/images/Logohome.png') }}" style="width: 120px ; height: 40px;">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="https://groupbgarage.herokuapp.com/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Veiculos Cadastrados</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Atualizar dados do veiculo</a>
                  </li>
                  </ul>
              </div>
            </div>
          </nav>


          <div class="card m-5 p-3 shadow-lg  " style="min-height: 200px;
">

<form action="/update/{{$carros->car_codigo}}" method="POST">

@csrf
@method('PUT')
<div class="row g-3">
    <div class="col-sm-6">
      <label for="car_modelo" class="form-label">Modelo do carro</label>
      <input type="text" class="form-control" id="modelo" name="car_modelo" placeholder="" value="{{$carros->car_modelo}}" required>
      <div class="invalid-feedback">
        Insira um valor válido
      </div>
    </div>

    <div class="col-sm-6">
      <label for="car_ano" class="form-label">Ano do modelo</label>
      <input type="number" class="form-control" id="####" name="car_ano" placeholder="" value="{{$carros->car_ano}}" required>
      <div class="invalid-feedback">
        ?????????
      </div>
    </div>

    <div class="col-12">
      <label for="car_descrição" class="form-label">Descrição do carro</label>
        <input type="text" class="form-control" id="####" name="car_descrição" placeholder="" value="{{$carros->car_descrição}}" required>
      <div class="invalid-feedback">
         ????????
        </div>
    </div>

    <div class="col-12">
      <label for="car_link_imagem" class="form-label">Link da imagem do carro</label>
        <input type="text" class="form-control" id="####" name="car_link_imagem" placeholder="" value="{{$carros->car_link_imagem}}" required>
      <div class="invalid-feedback">
         ????????
        </div>
    </div>

    <div class="col-sm-6">
      <label for="car_preco" class="form-label">Preço do carro</label>
      <input type="number" class="form-control" id="modelo" name="car_preco" placeholder="" value="{{$carros->car_preco}}" required>
      <div class="invalid-feedback">
        Insira um valor válido
      </div>
    </div>

    <div class="col-sm-6">
      <label for="car_kmrodados" class="form-label">Quilometros rodados</label>
      <input type="number" class="form-control" id="####" name="car_kmrodados" placeholder="" value="{{$carros->car_kmrodados}}" required>
      <div class="invalid-feedback">
        ?????????
      </div>
    </div>

    <div class="col-sm-6">
      <label for="car_potencia" class="form-label">Potência</label>
      <input type="number" class="form-control" id="modelo" name="car_potencia" placeholder="" value="{{$carros->car_potencia}}" required>
      <div class="invalid-feedback">
        Insira um valor válido
      </div>
    </div>

    <div class="col-sm-6">
      <label for="car_cilindrada" class="form-label">Cilindrada</label>
      <input type="number" class="form-control" id="####" name="car_cilindrada" placeholder="" value="{{$carros->car_cilindrada}}" required>
      <div class="invalid-feedback">
        ?????????
      </div>
    </div>

    <div class="col-md-4">
      <label for="car_mar_codigo" class="form-label">Marca</label>
      <select class="form-select" id="####" name="car_mar_codigo" required>
      @foreach($marcas as $marca)
      <option value="{{$marca->mar_codigo}}">{{$marca->mar_marca}}</option>
      @endforeach
        
      </select>
      <div class="invalid-feedback">
        Please select a marca:)
      </div>
    </div>

    <div class="col-md-4">
      <label for="car_cor_codigo" class="form-label">Cor</label>
      <select class="form-select" id="####" name="car_cor_codigo" required>
      @foreach($cores as $cor)
      <option value="{{$cor->cor_codigo}}">{{$cor->cor_cor}}</option>
      @endforeach
      </select>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>

    <div class="col-md-4">
    <label for="car_cat_codigo" class="form-label">Categoria</label>
      <select class="form-select" id="####" name="car_cat_codigo" required>
      @foreach($categorias as $categoria)
      <option value="{{$categoria->cat_codigo}}">{{$categoria->cat_categoria}}</option>
      @endforeach
      </select>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
      </div>


    <div class="col-md-4">
      <label for="car_tip_codigo" class="form-label">Tipo do Motor</label>
      <select class="form-select" id="####" name="car_tip_codigo" required>
      @foreach($motores as $motor)
      <option value="{{$motor->tip_codigo}}">{{$motor->tip_tipo_motor}}</option>
      @endforeach
        
      </select>
      <div class="invalid-feedback">
        Please select a marca:)
      </div>
    </div>

    <div class="col-md-4">
      <label for="car_pos_codigo" class="form-label">Posição do Motor</label>
      <select class="form-select" id="####" name="car_pos_codigo" required>
      @foreach($posicoes as $posicao)
      <option value="{{$posicao->pos_codigo}}">{{$posicao->pos_posicao_motor}}</option>
      @endforeach
      </select>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>

    <div class="col-md-4">
    <label for="car_tra_codigo" class="form-label">Tração</label>
      <select class="form-select" id="####" name="car_tra_codigo" required>
      @foreach($tracoes as $tracao)
      <option value="{{$tracao->tra_codigo}}">{{$tracao->tra_tração}}</option>
      @endforeach
      </select>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
      </div>
    </div>

    <div class= "text-center">
    <button class="w-50 btn btn-dark btn-md mt-3" type="submit">Salvar</button>

  </form> 

  <form action="/car/{{$carros->car_codigo}}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="w-50 btn btn-danger btn-md mt-3">Retirar do site</button>
                    </form>
        </div>
  
  </div>
    
</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>