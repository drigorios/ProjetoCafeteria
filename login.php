<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tela de Registro</title>
    <link rel="stylesheet" href="stylelogin.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
  </head>
  <body>
    <header>
      <div class="navbar show-menu">
        <div class="header ">
            <h1 class="logo">Brew <span>Haven.</span></h1>
            <nav>
                <ul>
                    <li>Home</li>
                    <li>Produtos</li>
                    <li>Sobre</li>
                    <li>Contato</li>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </nav>
            <div class="icons">
                <img src="imagens/cart.png">
                <img class="menu" src="imagens/menu.png" alt="">
            </div>
        </div>
    </div>
    </header>

    <!-- <span><hr class="sepheader"></span> -->
    <main>
      <div class="page">
        <div class="titulopage">
          <h1>Minha Conta</h1>
        </div>
        <div class="subtitulopage">
          <h3>Entre na sua conta para desfrutar dos nossos serviços.</h3>
        </div>
        <a href="#login"><i class="fa-regular fa-circle-down"></i></a>
      </div>

      <div class="formcontainerlogin">
        <div id="login" class="formbox">
         
          <div class="titulo">
            <h2>Login<i id="usericon" class="fa-solid fa-user"></i></i></h2>
          </div>
          <div class="labelseinputs">
            <form action="">
              <label for="email" class="labelemail">Email</label>
              <input class="forminputs" type="email" name="email" id="email" />
              <label for="senha" id="labelsenha">Senha</label>
              <input
                class="forminputs"
                type="password"
                name="senha"
                id="senha"
              />
              <div class="manteracesso">
              <input type="checkbox" name="manter" id="manter"><label for="manter">Manter acesso</label>
             </div>
              <input type="submit" value="Entrar" class="entrar" />
              <p>Não tem uma conta ainda? <a href="#">Registre-se</a>.</p>
            </form>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
