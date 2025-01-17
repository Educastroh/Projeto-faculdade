<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Css/styleEsqueceuSenha.css">
    <title>Telecall</title>
</head>
<body class="dark">
    <figure class="telecall">
        <img src="Imagens/Telecall1.png" alt="Telecall">
    </figure>

    <div class="coverdarkbtn">
        <div class="divdark">
            <input type="checkbox" id="darkmodebtn" name="darkmodebtn1" class="darkmode">
            <label for="darkmodebtn">
                <i class="bi bi-sun"></i>
            </label>   
        </div>
    </div>

    <main class="container">
        <div class="divform">
        <form>
            <h1 class="h1">Esqueceu a senha?</h1>
            <div class="div1e2">
                <div class="divlabel">
                    <label class="formfont" for="Login">Login:</label>
                </div>
                <div class="divbox"> 
                    <input class="boxsize" onkeydown="ajustaLoginSenha(this)" , onkeypress="ajustaLoginSenha(this)", onkeyup="ajustaLoginSenha(this)" type="text" name="login" id="loginNow" size="40" minlength="6" maxlength="6" placeholder="Digite seu Login" required> 
                </div> <br />

                <div class="divwall6">

                </div>

                <div class="divlabel">
                    <label class="formfont" for="email">E-mail:</label>
                </div>
                <div class="divbox"> 
                    <input class="boxsize" type="text" name="email1" id="email" size="40" placeholder="Digite o seu Email" required>
                </div> <br />

                <div class="divp">
                    <p>Por favor, informe um Email para que possamos enviar um código de redefinição de senha!</p>
                </div>

                
                <div class="div5">
                    <button class="btn1" onclick="enviar()" type="button">Enviar</button>
                </div>

            </div>
            
        </form>  
        </div>  
    </main>
<script src="Js/scriptEsqueceuSenha.js"></script>
<script src="Js/jqueryCadastro.js"></script>
</body>
</html>