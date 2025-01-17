<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Css/styleLogin.css">
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
        <div class="userdiv">
            <h2 class="username"></h2>
        </div>
        <div class="btnout">
            <button onclick="sair()" class="logout"></button>
        </div>
    </div>
    <main class="container">
        <div class="divform">
        <form id="efetuaLogin">
            <h1 class="h1">Entrar</h1>
            <div class="div1e2">
                <div class="divlabel">
                    <label class="formfont" for="Login">Login:</label>
                </div>
                <div class="divbox"> 
                    <input class="boxsize" onkeydown="ajustaLoginSenha(this)" , onkeypress="ajustaLoginSenha(this)", onkeyup="ajustaLoginSenha(this)" type="text" name="login" id="loginNow" size="40" minlength="6" maxlength="6" placeholder="Digite seu Login" required> 
                </div> <br />


                <div class="divlabel">
                    <label class="formfont" for="Senha">Senha:</label>
                </div>
                <div class="divbox"> 
                    <input class="boxsizepass" onkeydown="ajustaLoginSenha(this)" , onkeypress="ajustaLoginSenha(this)", onkeyup="ajustaLoginSenha(this)" type="password" name="senha" id="senhaNow" size="40" minlength="8" maxlength="8" placeholder="Digite sua senha" required>
                    <button type="button" id="eyebtn" class="btnpass" onclick="showpass()"></button>
                </div> <br />

                
                <a class="forgot" href="EsqueceuSenha.html" id="forgot-pass">Esqueceu a senha?</a>
                <div class="div5">
                    <button type="submit" value="entrar" class="btn1">Entrar</button>
                </div>


                <div class="divwall6">

                </div>


                <div class="div7">
                    <button class="btn2"><a class="hyperbtn2" href="Cadastro.html">Criar nova conta</a></button>
                </div>
            </div>
            
        </form>  
        </div>  
    </main>
<script src="Js/scriptLogin.js"></script>
<script src="Js/jqueryCadastro.js"></script>
<script src="Js/scriptUsuario.js"></script>
</body>
</html>