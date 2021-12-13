<html>
    <head>
      <link href="gtr4.jpg" rel="shortcut icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta charset="utf-8">
        <title>GB Garage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
       
       
          .modcard{
            border:none;
            background: rgba(0, 0, 0, 0.0);
          }
          .carddemo{
            margin-top:3%;
            border-bottom-left-radius: 5%;
            border-bottom-right-radius: 5%;
          }
          .cardbt{
            text-align: center;

          }
          .linktext{
           text-decoration:none;
          }
          .hr3 {
          border: 1;
          height: 2px;
          background-image: linear-gradient(to right, transparent, #CCC, transparent);  
          }
          
                
         

        </style>
         

        </style>
        </head>
    <title>paginacarro</title>
       
    <body class="w-100">

      <!-- Inicio da navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">

              
              <img src="{{ URL::asset('/images/Logohome.png') }}" style="width: 120px ; height: 40px;">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="https://groupbgarage.herokuapp.com">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://groupbgarage.herokuapp.com/allcars">Catalogo Completo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">{{$carros->marca->mar_marca}} {{$carros->car_modelo}}</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
<!--Fim da navbar-->


    
<!-- Card demonstrativo-->
<div class="row row-cols-12 m-0 "  >
<div class="mt-3 d-block col-12  col-sm-12 ">

    <div class="card mb-3" style="max-width: 100%; height: 100%;">
  <div class="row g-0 ">
    <div class="col-md-6 p-3">
      <img src="{{$carros->car_link_imagem}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-6" style="justify-content: center; text-align: center;">
      <div class="card-body">
        <h5 class="card-title">{{$carros->marca->mar_marca}} {{$carros->car_modelo}} - R${{$carros->car_preco}}</h5>
        <p class="card-text">{{$carros->car_descrição}}</p>

        <p>
  <a class="btn btn-dark" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif" data-bs-toggle="collapse" href="#descricao" role="button" aria-expanded="false" aria-controls="collapseExample">
    Detalhes técnicos
  </a>
  
</p>

<!--Collapse s-->
<div class="collapse" id="descricao">
  <div class="card card-body">
    <table class="table table-hover">
      
      <tbody>
        <tr>
          <th scope="row">Marca</th>
          <td>{{$carros->marca->mar_marca}}</td>
         
        </tr>
        <tr>
          <th scope="row">Ano</th>
          <td>{{$carros->car_ano}}</td>
          
        </tr>
        <tr>
          <th scope="row">Cor</th>
          <td> {{$carros->cor->cor_cor}}</td>
         
        </tr>
        <tr>
          <th scope="row">Potencia</th>
          <td>{{$carros->car_potencia}} cavalos</td>
          
        </tr>
        <tr>
          <th scope="row">Cilindrada</th>
          <td >{{$carros->car_cilindrada}}</td>
         
        </tr>
        <tr>
          <th scope="row">Tipo de Motor</th>
          <td> {{$carros->motor->tip_tipo_motor}}</td>
         
        </tr>
        <tr>
          <th scope="row">Posição do motor</th>
          <td> {{$carros->posicao_motor->pos_posicao_motor}}</td>
         
        </tr>
        <tr>
          <th scope="row">Tração</th>
          <td> {{$carros->tracao->tra_tração}}</td>
         
        </tr>
        <tr>
          <th scope="row">Categoria</th>
          <td >{{$carros->categoria->cat_categoria}}</td>
         
        </tr>
        <tr>
          <th scope="row">KM rodados</th>
          <td >{{$carros->car_kmrodados}}</td>
         
        </tr>

       
      </tbody>
    </table>
  </div>
</div>



      </div>
    </div>

  </div>
</div>

  </div>
</div>
    	<!-- Footer -->
<footer class="page-footer font-small blue mt-4 pt-4 pl-5 pr-5" style="background-color: rgb(33,37,41);">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase" style="color: white;">Saiba mais</h5>
        <p style="color: white;">Nosso site apresenta uma grande variedade de carros antigos, afinal esse é o nosso foco de vendas.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase" style="color:white;">Contate-Nos
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
          </svg>
        </h5>

        <ul class="list-unstyled">
          <li>
            <a class="link-light linktext" target="_blank" href="https://mail.google.com/mail/u/0/#inbox?compose=new">
            
              garagegroupb@gmail.com</a>
          </li>
         
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase" style="color: white;">Redes Sociais</h5>

        <ul class="list-unstyled ">
          <li>
            <a class="link-light linktext" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg> Facebook</a>
          </li>
          <li>
            <a class="link-light linktext" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg> Instagram</a>
          </li>
          <li>
            <a class="link-light linktext" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
              <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
            </svg> Linkedin</a>
          </li>
          <li>
            <a class="link-light linktext" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
            </svg> Whatsapp</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color:white;">© 2021 Copyright:
    <a class="link-light linktext" href="https://mdbootstrap.com/"> GroupB Garage</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>