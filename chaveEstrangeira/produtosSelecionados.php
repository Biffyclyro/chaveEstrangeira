<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Venda.com</title>
  </head>
  <body>
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
      <a class="navbar-brand" href="#">Venda.com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="produtos.php">Produtos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="produtosSelecionados.php">Produtos Selecionados<span class="sr-only">(página atual)</span></a>
          </li>         
          
        </ul>
        
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1><b>Produtos Selecionados</b></h1>
        </div>    
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Descrição</th>
                <th scope="col">Opção</th>                
              </tr>
            </thead>
            <tbody>
              <?php 
                include 'crudVendas.php';
                $resultado = mostrarProdutosSelecionados(1);
                if($resultado){
                  while ($linha=mysqli_fetch_assoc($resultado)) {
                    $codigoProduto=$linha['codigoProduto'];
                    $descricao=$linha['descricao'];
                    echo "
                      <tr>                
                        <td>$des</td>
                        <td><a class='btn btn-danger' href='controlaVenda.php?opcao=tirarSelecao&codigo=$codigoProduto'>Tirar Seleção</a></td>                        
                      </tr> 
                    ";
                  }
                }
              ?>
                           
            </tbody>
          </table>
        </div>
      </div>
    </div>

    



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>