<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/login.css">
  <title>Login</title>
</head>
<body>
    <img src="imagens/logo-BC-rmvBG.png" alt="logo-bolsacripto">
    <div class="container">
              <div>
                  <h2>Login</h2>
                        <form id="registrationForm"  action="includes/logica/controller.php" method="post">
                        <div class="input-field">
                            <p>Email<label for="email">
                            </label><input type="text" name="email" id="email"  autofocus require></label></p>
                            <span id="emailError" class="error"></span>
                            <div class="underline"></div>
                        </div>
                        <div class="input-field">
                            <p>Senha
                              <label for="senha"></label><input type="password" name="senha" id="senha"></p>
                              <span id="passwordError" class="error"></span>
                            <div class="underline"></div>
                        </div>
                        <div class="center">
                            <div>
                                  <p><button type="submit" class="btn btn-success" id='entrar' name='entrar' value="Entrar" onsubmit="validateForm()">Entrar</button></p>
                            </div> 
                            <div>
                                  <a href="cadastrarPessoa.php" class="btn btn-success">Criar conta</a>
                            </div>
                            <p><a href="esqueciSenha.php">Esqueceu a senha?</a></p>


                        </div>

                      
                    </form>
                    <div>
                </div>
              </div>
              <div id='msg'>
              </div>
              <?php 
                    if(isset($_SESSION['msg']))
                    { 
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    };
               ?>
              <div class="links">
        
              </div>
        </div>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>
</html>
