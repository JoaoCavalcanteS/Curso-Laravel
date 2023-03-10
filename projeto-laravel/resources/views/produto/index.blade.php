<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/home.css" media="screen"/>
    <title>Delta Esportes</title>
</head>
    <body>

        <!-- <div>
            <h1 id="img1">Delta<img  src="./IMG/logo-favicon.png" width="80px"></h1>
        </div> -->

        <!-- Barra de navegação -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
          <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Delta</a> -->
            <a class="navbar-brand" href="#"><img src="./LOGO/logo-favicon.png" width="10%">Delta</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
              <form class="d-flex" role="search">
                    <!--Conferir se a alteração de search para possa gerar algum problema pesquisar-->
                  <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Login/Cadastro
                  </a>
                  <ul class="dropdown-menu">
                    <li><form>
                      <div class="row mb-3">
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Senha">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Entrar</button>
                    </form></li>
  
                    <!-- <li><a class="dropdown-item" href="#">Another action</a></li> -->
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Cadastre-se</a></li>
                  </ul>
                </li>
                <ul>
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
            </ul>
          </div>
      </nav>
          <br>
          
            <!--Analisar os botôes, pois cada um pode ter uma submissão diferente-->
          <div class="botao">
            <a class="btn btn-primary" href="#" role="button">Home</a>
              <button class="btn btn-primary" type="submit">Mais vendidos</button>
              <input class="btn btn-primary" type="button" value="Vestuarios">
              <input class="btn btn-primary" type="submit" value="Acessorios">
              <input class="btn btn-primary" type="reset" value="Tenis">
              <input class="btn btn-primary" type="reset" value="Delta">
          </div>    
          <br>
          <!--Carrossel-->
        
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-block center-content">
                            <img src="./IMG/imgim.jpg" alt="..." height="500" >
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style="color: black;">Promoções do dia.</h5>
                            <p style="color: black;">Promoções do dia.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block center-content">
                            <img src="./IMG/imgim.jpg" alt="..." height="500" >
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style="color: black;">Camisetas esportivas.</h5>
                            <p style="color: black;">Camisetas esportivas.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block center-content">
                            <img src="./IMG/imgim.jpg" alt="..." height="500">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style="color: black;">Camisetas de corrida.</h5>
                            <p style="color: black;">Camisetas de corrida.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
          </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

          <!--Card-->
          <section class="produtos">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <img src="./IMG/imgim.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$produto->PRODUTO_NOME}}</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <button type="submit">Comprar</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./IMG/imgim.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mercedes-AMG F1</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <button type="submit">Comprar</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./IMG/imgim.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mercedes-AMG F1</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            <button type="submit">Comprar</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./IMG/imgim.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mercedes-AMG F1</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <button type="submit">Comprar</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./IMG/imgim.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mercedes-AMG F1</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This is a longer card with supporting text below as a natural </p>
                            <button type="submit">Comprar</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./IMG/imgim.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mercedes-AMG F1</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <button type="submit">Comprar</button>
                        </div>
                    </div>
                </div>
                <!--Codigo de cada item Card-->
                <!-- <div class="col">
                    <div class="card">
                        <img src="./IMG/img1.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div> -->
          </section>

              <!--Floater-->
              <div id="floater">
                <h2>Delta</h2>
                <input type="text" placeholder="seu nome">
                <input type="email" placeholder="seu email">
                <button id="email">Enviar</button>
                <br><br>

                <h2>Contato</h2>
                <ul>
                  <li>rodriguesdeaguiardaniel@gmail.com</li>
                  <li>joao@gmail.com</li>
                </ul>

                <img  src="./IMG/logo-favicon.png" width="10%">
              </div>

    </body>
</html>