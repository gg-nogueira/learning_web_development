<?php 
  include_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body>
    <!-- início do corpo da página -->
    <!-- fluid containers -->
    <div class="container-fluid">
        <!-- início do menu-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.html">Tudo sobre plantas</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sobrenos.html">Sobre nós</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="localizacao.html">Localização</a>
                  </li>
             
                </ul>
              </div>
            </div>
          </nav>
          <!-- término do menu-->

          <!-- início do carrosel-->
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://www.petz.com.br/blog/wp-content/uploads/2019/08/suculentas.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://www.petz.com.br/blog/wp-content/uploads/2022/08/plantas-trepadeiras-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://verdenaweb.com.br/wp-content/uploads/2022/03/plantas-com-folhas-grandes-1200x900.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
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
          <!-- término do carrosel -->
          
          <!-- Início do card groups -->
          <div class="card-group">
            <div class="card">
              <img src="https://img.freepik.com/fotos-gratis/arranjo-lindo-de-papel-de-parede-de-flores_23-2149057015.jpg?w=2000" alt="...">
              <div class="card-body">
                <h5 class="card-title">Flor do campo</h5>
                <p class="card-text">As flores mais comuns dessa espécie são brancas, rosas, vermelhas e roxas, mas hoje em dia é possível encontrar variedades mescladas de beleza incomparável. As azaléias são um tipo de flor do campo fácil de plantar e cultivar que rendem lindos arranjos e buquês.</p>
                
              </div>
            </div>
            <div class="card">
                <img src="https://static.escolakids.uol.com.br/2023/01/flor-de-orquidea-com-petalas-cor-de-rosa.jpg" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Orquídea</h5>
                  <p class="card-text">Orquídeas são todas as plantas que compõem a família Orchidaceae, pertencente à ordem Asparagales, uma das maiores famílias de plantas existentes. Apresentam muitíssimas e variadas formas, cores e tamanhos e existem em todos os continentes, exceto na Antártida, predominando nas áreas tropicais.</p>
                  
                </div>
              </div>
            <div class="card">
              <img src="https://img.freepik.com/fotos-gratis/close-up-de-uma-flor-roxa_181624-25863.jpg" alt="...">
              <div class="card-body">
                <h5 class="card-title">Margarida</h5>
                <p class="card-text">Considerada uma das flores mais delicadas e populares da natureza, a margarida também conhecida como margarita, margarita-maior, bonina, olho-de-boi e bem-me-quer é vista como a flor da pureza e do amor.</p>
                
              </div>
            </div>
            <div class="card">
              <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Hibisco</h5>
                <p class="card-text">O mimo-de-vênus, também conhecido por hibisco ou graxa-de-estudante, é um arbusto lenhoso, fibroso, com até 5 metros de altura, originário da Ásia tropical e do Havaí, onde é considerado a flor nacional. Possui 5 000 variedades.</p>
                
              </div>
            </div>
          </div>
          <!-- Término do card groups -->
          
          <!-- Início do formulário -->
          
          <form class="row g-3 mt-4" action="cadastrar.php" method="post"> 
            <h2 class="cadastro">Faça seu cadastro</h2>
            <div class="col-md-12">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" maxlength="80" onblur="validaEmail()">
            </div>
           
            <div class="col-12">
              <label for="inputAddress" class="form-label">Endereço</label>
              <input type="text" class="form-control" id="inputAddress" maxlength="80" placeholder="Rua ....." name="endereco">
            </div>
            
            <div class="col-md-6">
              <label for="inputCity" class="form-label">Cidade</label>
              <input type="text" class="form-control" id="inputCity" name="cidade" maxlength="30">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">Estado</label>
              <select id="inputState" class="form-select" name="estado" maxlength="40">
                <option selected>Escolha...</option>
                <option>São Paulo </option>
                <option>Rio de Janeiro </option>
                <option>Paraná</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Cep</label>
              <input type="text" class="form-control" maxlength="9" id="cep" name="cep" onblur="formataCep()">
            </div>
            
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </form>

          <!-- Término do formulário -->
    </div>

 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="assets/js/formataValida.js"></script>
    <script>
      var cep=formataCep();
      var email=validaEmail();
    </script>
    
</body>
</html>