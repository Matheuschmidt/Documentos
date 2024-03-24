<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/acesso-adm.css') }}">
    <title>ADM</title>
</head>
<body>
    <div class="box">
      <div class="entrar-adm">
        <form action="#">
          <div class="entrar-header">
            <div class="title">
              <h1>Administração</h1>
              <br />
            <!--  <p>Com e-mail e senha para entrar:</p>-->
            </div>
          </div>

          <div class="input-group">
            <div class="input-box">
              <label for="email">Digite o seu e-mail:</label>
              <input
                id="email"
                type="email"
                name="e-mail"
                placeholder="E-mail"
                required
              />
            </div>

            <div class="input-box">
              <label for="password">Digite a sua senha:</label>
              <input
                id="password"
                type="password"
                name="password"
                placeholder="Senha"
                required
              />
              <!-- <div class="eye">
                    <img src="assents/img/eyePass/eyePass.svg">
                </div>-->
            </div>
          </div>

          <div class="below">
            <div class="remeber-password">
              <input type="checkbox" id="remember" name="remember" />
              <label for="remember">Lembrar minha senha</label>
            </div>

            <div class="forget-password">
              <a>Esqueci minha senha</a>
            </div>
          </div>

          <div class="button">
            <div class="acessar-button">
              <button><a href="index.blade.php">Entrar</a></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
