<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>E-commerce PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
  <div class="container">
    <a class="navbar-logo" href="#">Logo</a>
    <div class="navbar-buttons">
      <button class="nav-button">O que escolher</button>
      <button class="nav-button">Sobre nós</button>
      <button class="nav-button">Comunismo</button>
      <div class="dropdown">
        <!-- Arrumar a cor do botão (o cinza fica depois de clicar, mesmo atualizando a página) -->
        <button class="nav-button dropdown-toggle">Marcas</button> 
        <div class="dropdown-menu">
          <a href="#" class="dropdown-item">Samsung</a>
          <a href="#" class="dropdown-item">Apple</a>
          <a href="#" class="dropdown-item">Motorola</a>
          <a href="#" class="dropdown-item">Xiaomi</a>
        </div>
      </div>
    </div>
    <button class="navbar-alternar">☰</button>
  </div>
</nav>

    <!-- Barra lateral => sem uso por enquanton-->
    <div class="sidebar" id="sidebar">
        <ul class="sidebar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Link 1</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Link 2</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Link 3</a></li>
        </ul>
    </div>

    <!-- Carrossel -->
    <section>
    <div id="Carrossel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#Carrossel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#Carrossel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#Carrossel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imgs/carrossel-1.jpg" class="d-block w-100 h-30" alt="Primeiro Slide">
          <div class="carousel-caption">
            <p class="text-center bg-dark text-light rounded-pill p-2 position-relative start-50 translate-middle-x bg-opacity-50">O melhor e-commerce de Cananeia</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="imgs/carrossel-2.jpg" class="d-block w-100 h-30" alt="Segundo Slide">
          <div class="carousel-caption">
            <p class="text-center bg-dark text-light rounded-pill p-2 position-relative start-50 translate-middle-x bg-opacity-50">muitos modelos para escolher</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="imgs/carrossel-3.jpg" class="d-block w-100 h-30" alt="Terceiro Slide">
          <div class="carousel-caption">
            <p class="text-center bg-dark text-light rounded-pill p-2 position-relative start-50 translate-middle-x bg-opacity-50">Melhores preços</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#Carrossel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#Carrossel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
    <br>
    <br>
    <br>

    <!-- Qual a escolha certa para você? -->
     <!-- Já ta certinho, só colocar o texto e as imagens -->
    <h1 class="text-center">Qual a melhor escolha para você?</h1>
    <section id="tipo-escolha" class="container my-5">
    
    <br>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card h-100 border">
          <img src="imgs/img-ossada-baleia.jpg" class="card-img-top img-fluid" alt="entrada">
          <div class="card-body">
            <h5 class="card-title text-primary">Modelos de entrada</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, eveniet praesentium soluta, reprehenderit molestias ab, neque temporibus magni ad itaque veniam quam iure minima? Odit rem quia neque itaque et enim nisi ad cupiditate nesciunt quo, quaerat hic doloremque? Totam aspernatur quaerat at ad ducimus dolores molestias quod voluptate et!</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100 w-300 border">
          <img src="imgs/carrossel-.jpg" class="card-img-top img-fluid" alt="intermediario">
          <div class="card-body">
            <h5 class="card-title text-primary">Modelos intermediários</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae earum nulla qui magnam dolorem repellendus, laboriosam id enim eius libero ullam. Enim illo accusantium similique ipsum. Distinctio iusto doloremque accusamus harum, id repellat pariatur enim dolorum. Voluptatem atque a quo aliquam fugiat reiciendis labore! Illo corrupti dolore quam blanditiis similique!</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100 border">
          <img src="imgs/marco-p.jpg" class="card-img-top img-fluid" alt="top-linha">
          <div class="card-body">
            <h5 class="card-title text-primary">Modelos top de linha</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates doloremque ea consequuntur quaerat exercitationem quasi magni odit saepe! Facilis corporis soluta qui aliquam officia sint a atque delectus, molestiae odio optio fugiat sed quis, rerum exercitationem voluptas vero quaerat reprehenderit aut. Perspiciatis, odio veniam? Doloremque totam cum porro consectetur nostrum?</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
