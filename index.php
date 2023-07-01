<?php
include('connection.php');
if(isset($_POST['submit']))
  {
      //getting the post values

    $Nome=$_POST['nome'];
    $Email=$_POST['email'];
    $Senha=$_POST['passwordInput'];
    $CPF=$_POST['cpf']; 

  // Query for data insertion
     $query=mysqli_query($con, "insert into visitante(Email, Senha, Nome, CpfVisitante) value('$Email','$Senha', '$Nome','$CPF')");
    if ($query) {
      echo "<script>alert('dado inserido com sucesso');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
  }

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="./imagens/shield.ico">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css" />
  <title>SMP-IFS</title>

</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="#" class="sign-in-form">
          <h2 class="title">Login</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email" />
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Senha" id="passwordInput" />
            <span class="toggle-password">
              <i class="fas fa-eye"></i>
            </span>
          </div>

          <input type="submit" value="Login" class="btn solid" />
          <p class="social-text">Inscreva-se pelas plataformas</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
        <form action="#" method="POST" class="sign-up-form">
          <h2 class="title">Cadastre-se</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Nome Completo" name="nome" required="true">
          </div>

          <div class="input-field">
            <i class="fas fa-id-card"></i>
            <input type="text" placeholder="CPF" class="cpf-input" name="cpf" required="true">
          </div>


          <div class="input-field">
            <i class="fas fa-envelope"></i>

            <input type="text" placeholder="Email" class="email" name="email" required="true">
          </div>


          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="passwordInput" placeholder="Senha" id="passwordInput" required="true">
            <span class="toggle-password">
              <i class="fas fa-eye"></i>
            </span>
          </div>
          <button type="submit" class="btn solid" name="submit">Confirmar</button>
          <p class="social-text">Inscreva-se usando plataformas</p>
        </form>
      </div>
    </div>
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <img src="./imagens/logo7.png" class="image" alt="" />
          <div class="texto-centralizar">
            <h3>Não possui conta?</h3>
            <p>
              Bem-vindo(a) à nossa família de segurança e proteção! Estamos felizes em tê-lo(a) aqui.
            </p>
            <button class="btn transparent" id="sign-up-btn">Cadastre-se</button>
          </div>
        </div>

      </div>
      <div class="panel right-panel">
        <div class="content">
          <div class="image-2">
            <img src="./imagens/logo7.png" class="image-cadastro" alt="" />
            <div class="texto2-centralizar">
              <h3>Faça parte desse futuro</h3>
              <p>
                Proteja seu mundo com o sistema de monitoramento mais avançado. Entre em nosso sistema e mantenha-se um passo à frente do imprevisto.
              </p>
              <button class="btn transparent" id="sign-in-btn">Login</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="app.js"></script>
</body>

</html>>
   </div>
</div>
  <script src="app.js"></script>
</body>

</html>
