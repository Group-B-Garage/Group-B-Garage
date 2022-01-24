<!doctype html>
<html lang="en">
  <head>
     <title>GB Garage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .botoeseditar{
            border-radius:6px 0px 0px 6px;
        
        }
        .botoesexcluir{
            border-radius:0px 6px 6px 0px;
        }
        .linktext{
            text-decoration: none;
        }

    </style>
   
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
                  </ul>
              </div>
            </div>
          </nav>

<div class="card  m-5 p-3 shadow-lg  " style="min-width: 800px;min-height: 200px;
">

    <table class="table ">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">MODELO</th>
            <th scope="col">ANO</th>
            <th scope="col">COR</th>
            <th scope="col">KM</th>
            <th scope="col">Preço</th>
            

          </tr>
        </thead>
        <tbody>

        @if(count($carros) > 1)
        @foreach($carros as $carro)
            <tr>
                <th scope="row">{{$carro->car_codigo}}</th>
                <td>{{$carro->marca->mar_marca}} {{$carro->car_modelo}}</td>
                <td>{{$carro->car_ano}}</td>
                <td>{{$carro->cor->cor_cor}}</td>
                <td>{{$carro->car_kmrodados}}</td>
                <td>{{$carro->car_preco}}</td>
                <td class="d-flex justify-content-center " >
                    <a href="/edit/{{$carro->car_codigo}}"> <button type="button" class="btn btn-warning botoeseditar">Editar Dados/Retirar do Site</button></a>
                    
                </td>
                
              </tr>

        @endforeach

        @else
        <p>Não temos carros disponíveis</p>
        @endif
        </tbody>
      </table>

        <a href="/addcar"> <button type="button" class="btn w-100 btn-dark">Adicionar Carro</button></a>
  
  
</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>