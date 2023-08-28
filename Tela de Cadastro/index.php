<?php
include('../Backend/conexao.php');

if (isset($_POST['btn-cadastrar'])) {
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $rua = $_POST['rua'];
  $bairro = $_POST['bairro'];
  $cep = $_POST['cep'];
  $numero = $_POST['num'];
  $telefone = $_POST['telefone'];
  $cpf = $_POST['cpf'];
  $email = $mysqli->real_escape_string($_POST['email']);
  $senha = $mysqli->real_escape_string($_POST['senha']);

  $sqlVerificar = "SELECT * FROM cliente WHERE email = '$email' OR cpf = '$cpf'";
  
  $sql_query = $mysqli->query($sqlVerificar) or die("Falha na execução do código SQL: " . $mysqli->error);
  $quantidade = $sql_query->num_rows;

  $sqlCode = "INSERT INTO cliente (nome, sobrenome, cpf, telefone, email, rua, bairro, numero, cep, senha)
  VALUES ('$nome', '$sobrenome', '$cpf', '$telefone', '$email', '$rua', '$bairro', '$numero', '$cep', '$senha')";

  if($quantidade == 1) {
    echo "E-mail ou CPF já estão em uso";
  }else{
    $mysqli->query($sqlCode) or die("Falha na execução do código SQL: " . $mysqli->error);
    echo "Cadastro Realizado com sucesso";
  }
}
?>

<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <title>Sign Up #2</title>
</head>

<body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg-02.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 py-5">
            <h3>Registre-se</h3>
            <br>
            <form action="" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" id="nome">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" id="sobrenome">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="rua">Logradouro</label>
                    <input type="text" class="form-control" name="rua" placeholder="Logradouro" id="rua">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" name="bairro"  placeholder="Bairro" id="bairro">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" name="cep" placeholder="CEP" id="cep">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="num">Número</label>
                    <input type="text" class="form-control" name="num" placeholder="Número" id="num">
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="email">Endereço de Email</label>
                    <input type="email" class="form-control" name="email" placeholder="seuemail@dominio.com" id="email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="telefone">Telefone:</label>
                    <input type="text" class="form-control" name="telefone" id="telefone" name="telefone" maxlength="15"
                      placeholder="(XX) XXXXX-XXXX">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" name="cpf" id="cpf" name="cpf" maxlength="14"
                      placeholder="000.000.000-00">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">

                  <div class="form-group last mb-3">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="******" id="senha">
                  </div>
                </div>
                <div class="col-md-6">

                  <div class="form-group last mb-3">
                    <label for="re-password">Confirme sua senha</label>
                    <input type="password" class="form-control" placeholder="******" id="re-password">
                  </div>
                </div>
              </div>

              <div class="d-flex mb-5 mt-4 align-items-center">
                <div class="d-flex align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">Ao concordar em criar a conta
                      significa que você está aceitando nossos <a href="#">Termos e Condições</a> e nossa <a
                        href="#">Política de Privacidade</a>.</span>
                    <input type="checkbox" checked="checked" />
                    <div class="control__indicator"></div>
                  </label>
                </div>
              </div>

              <input type="submit" name="btn-cadastrar" value="Cadastrar" class="btn px-5 btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>


  </div>



  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>