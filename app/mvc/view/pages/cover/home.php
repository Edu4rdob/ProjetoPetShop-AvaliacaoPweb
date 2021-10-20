<?php
	session_start();
	
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Cover Template for Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="../../../../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../assets/css/home.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">AnimalsPrint</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"" href="#">Sign in</a>
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Quem somos</h1>
        <p class="lead">Somos uma clínica veterinaria destinada para cuidar diretamente com seu pet. Aqui temos o melhor tratamento que seu bichinho pode ter e muito mais! Faça seu login e venha conhecer o que essa empresa oferece.</p>
        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
        </p>
      </main>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header ">
              <h5 class="modal-title" id="exampleModalLabel">Entre na AnimalsPrint</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="../../static/imagens/ico-petshop-e9940-thumbnail.png" style="width:180px" alt="" srcset="">
              <form style="color: black;" action="../../../controller/teste.php" method="POST">
                <div class="mb-3">
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Email address" style="margin-top: 30px; background-color: gainsboro; border-radius: 20px;">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" name="senha"id="exampleInputPassword1" style="border-radius: 20px; background-color: gainsboro;" placeholder="Password">
                </div>
                <div class="modal-footer vstack col-md-5 mx-auto classeMude">
                  <div>
                    <input type="submit" class="btn btn-danger buttonHover" value='Sign in'>
                  </div>
                  <p style="color: black;">Sign in with</p>
                  <div class='botoesSignUp'>
                    <div>
                      <a href="../checkout/form.php">
                      <button type="button" class="btn btn-outline-dark buttonSignUp">cliente</button></a>
                      <a href="../checkout/form2.php">
                      <button type="button" class="btn btn-outline-dark buttonSignUp">veterinario</button></a>
                    </div>
                    <div>
          
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
