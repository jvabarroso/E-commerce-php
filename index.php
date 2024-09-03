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
  
<?php
session_start();

// Função para adicionar produto ao carrinho
function adicionarAoCarrinho($idProduto, $nomeProduto, $quantidade, $preco) {
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = array();
    }

    $produtoJaExiste = false;

    foreach ($_SESSION['carrinho'] as &$item) {
        if ($item['id'] == $idProduto) {
            $item['quantidade'] += $quantidade;
            $produtoJaExiste = true;
            break;
        }
    }

    if (!$produtoJaExiste) {
        $novoItem = array(
            'id' => $idProduto,
            'nome' => $nomeProduto,
            'quantidade' => $quantidade,
            'preco' => $preco
        );
        $_SESSION['carrinho'][] = $novoItem;
    }
}

// Função para remover produto do carrinho
function removerDoCarrinho($idProduto) {
    if (isset($_SESSION['carrinho'])) {
        foreach ($_SESSION['carrinho'] as $key => $item) {
            if ($item['id'] == $idProduto) {
                unset($_SESSION['carrinho'][$key]);
                // Re-indexa o array para evitar buracos
                $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
                break;
            }
        }
    }
}

// Verifica se a remoção foi solicitada
if (isset($_GET['remover'])) {
    removerDoCarrinho($_GET['remover']);
    header("Location: carrinho.php"); // Redireciona para a página do carrinho
    exit;
}

// Verifica se o formulário de adicionar foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idProduto = $_POST['idProduto'];
    $nomeProduto = $_POST['nomeProduto'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];

    adicionarAoCarrinho($idProduto, $nomeProduto, $quantidade, $preco);
}
?>

    <!-- Navbar -->
    <nav class="navbar">
      
        <div class="navbar-buttons">
            <a href="#" class="btn btn-secondary">
              <img src='imgs/bolsa.png'>
            </a>
        </div>
        <div class="container">
            <a class="navbar-logo" href="#">Logo</a>
            <div class="navbar-buttons">
                <button class="nav-button">O que escolher</button>
                <button class="nav-button">Sobre nós</button>
                <button class="nav-button"> Suporte</button>
                <div class="dropdown">
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

    <!-- Carrossel -->
    <section>
        <div id="Carrossel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#Carrossel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#Carrossel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#Carrossel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#Carrossel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imgs/carrossel-1.jpg" class="d-block w-100" alt="Primeiro Slide">
                    <div class="carousel-caption">
                        <p class="text-center bg-dark text-light rounded-pill p-2 position-relative start-50 translate-middle-x bg-opacity-50">O melhor e-commerce de Cananeia</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imgs/carrossel-2.jpg" class="d-block w-100" alt="Segundo Slide">
                    <div class="carousel-caption">
                        <p class="text-center bg-dark text-light rounded-pill p-2 position-relative start-50 translate-middle-x bg-opacity-50">Muitos modelos para escolher</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imgs/carrossel-3.jpg" class="d-block w-100" alt="Terceiro Slide">
                    <div class="carousel-caption">
                        <p class="text-center bg-dark text-light rounded-pill p-2 position-relative start-50 translate-middle-x bg-opacity-50">Melhores preços</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imgs/carrossel-4.jpg" class="d-block w-100" alt="Quarto Slide">
                    <div class="carousel-caption">
                        <p class="text-center bg-dark text-light rounded-pill p-2 position-relative start-50 translate-middle-x bg-opacity-50">Lorem ipsum dolor sit.</p>
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
    <br><br><br>

    <!-- Seção de Produtos -->
     <!-- Fazer tipo uma barra de rolagem para poder ver os modelos um do lado do outro -->
    <h1 class="text-center">Qual a melhor escolha para você?</h1>
    <section id="tipo-escolha" class="container my-5">
        <div class="row">
            <!-- Modelo de Entrada -->
            <div class="col-md-4">
                <div class="card h-100 border">
                    <img src="imgs/img-ossada-baleia.jpg" class="card-img-top img-fluid" alt="entrada">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Modelos de Entrada</h5>
                        <p class="card-text">Os celulares de entrada são projetados para oferecer funcionalidade essencial a um custo reduzido. Com especificações mais básicas, eles atendem bem às necessidades cotidianas, como chamadas, mensagens e navegação na web. Estes modelos geralmente possuem processadores mais simples, telas menores e câmeras de qualidade fundamental, o que é suficiente para usos comuns. A capacidade de armazenamento é limitada, mas muitas vezes há suporte para cartões microSD. O preço acessível torna-os uma escolha prática para quem busca um dispositivo funcional sem investir muito.</p>
                    </div>
                </div>
            </div>
            <!-- Modelo Intermediário -->
            <div class="col-md-4 ">
                <div class="card h-100 border">
                    <img src="imgs/carrossel-.jpg" class="card-img-top img-fluid" alt="intermediario">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Modelos Intermediários</h5>
                        <p class="card-text">Os celulares intermediários representam um equilíbrio entre custo e desempenho. Eles oferecem uma performance superior aos modelos de entrada, com processadores mais avançados e maior capacidade de memória RAM, o que melhora a eficiência e a capacidade de multitarefa. A tela é geralmente de maior tamanho e melhor resolução, proporcionando uma experiência visual aprimorada. As câmeras são de qualidade superior, com recursos adicionais que permitem melhores fotos e vídeos. O armazenamento é mais amplo, frequentemente com opções de expansão. Esses modelos são ideais para quem busca um desempenho sólido e recursos adicionais sem pagar o preço dos modelos premium.</p>
                    </div>
                </div>
            </div>
            <!-- Modelo Premium -->
            <div class="col-md-4">
                <div class="card h-100 border">
                    <img src="imgs/carrossel-3.jpg" class="card-img-top img-fluid" alt="premium">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Modelos Premium</h5>
                        <p class="card-text">Os celulares premium, também conhecidos como "top de linha", são os modelos mais avançados do mercado, equipados com processadores de última geração e grande memória RAM para desempenho excepcional em tarefas intensivas e jogos. Suas telas oferecem alta resolução e tecnologia avançada, garantindo imagens nítidas. As câmeras são de qualidade superior, com múltiplas lentes para captura em alta definição. O armazenamento interno é generoso, geralmente sem suporte para expansão externa. Incluem recursos como carregamento sem fio e resistência à água, refletindo seu alto investimento e qualidade superior.
</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container text-center">
            <p>&copy; 2024 Sua Loja. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-I1bEX8hM4N6krhz7kzBboZ9i29pX1KO3d6n5YO5j9UG7y8JstL75Z5hR3NTP7TRb" crossorigin="anonymous"></script>
</body>
</html>
