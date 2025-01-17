<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecall</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Css/styleCadastro.css">
    <script src="Js/jqueryCadastro.js"></script>
</head>
<body class="dark">
   
    <figure class="telecall">
      <img src="Imagens/Telecall.png" alt="Telecall">
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
   <form id="cadastraPessoa" action="crud_backend.php" method="post" onsubmit="return comparaSenha() && checaCamposPreenchidos();">
   

    <h1 class="h1">Cadastre-se</h1>
    <div class="div1e2">

         <!-- Modal -->
      <div id="myModal" class="modal">
         <div class="modal-content">
         <span class="close">&times;</span>
         <p id="modal-message"></p>
         </div>
      </div>

      <div class="div1">
         <div>
            <label class="formfont" for="Nome">Nome:</label>
         </div>
         <div>
            <input class="boxsize" type="text" name="nome"  minlength="15" maxlength="60" placeholder="Digite seu nome completo" required>
         </div> <br />

         <div>
            <label class="formfont" for="Nome Materno">Nome Materno:</label>
         </div> 
         <div>
            <input class="boxsize" type="text" name="nomeMaterno"  minlength="15" maxlength="60" placeholder="Digite o nome de sua mãe completo" required>
         </div> <br />

         <div>
            <label class="formfont" for="Telefone Celular">Telefone Celular:</label>
         </div>
         <div> 
            <input class="boxsize"  onkeydown="ajustaTelefone(this)" , onkeypress="ajustaTelefone(this)", onkeyup="ajustaTelefone(this)" type="tel" name="celular" id="telefones2" placeholder="(+xx) xx-xxxxx-xxxx" minlength="17" maxlength="17" required> 
         </div> <br />

         <div>
            <label class="formfont" for="Data de Nascimento">Data de Nascimento:</label>
         </div>
         <div> 
            <input class="boxsize" type="date" name="data"  min="1900-01-01" max="2023-06-12" required>
         </div> <br />
      </div>



      <div class="div2">
         <div>
            <label class="formfont" for="CPF">CPF:</label>
         </div>
         <div> 
            <input  class="boxsize" onkeydown="ajustaCpf(this)" , onkeypress="ajustaCpf(this)", onkeyup="ajustaCpf(this)" type="text" name="cpf"  minlength="14" maxlength="14" placeholder="Digite seu CPF" required> 
         </div> <br />

         <div>
            <label class="formfont" for="Endereço Completo">Endereço Completo:</label>
         </div>
         <div> 
            <input class="boxsize" type="text" name="endereco"  placeholder="Digite seu endereço" required> 
         </div> <br />

         <div>
            <label class="formfont" for="Telefone Fixo">Telefone Fixo:</label>
         </div>
         <div> 
            <input class="boxsize" onkeydown="ajustaTelefone(this)" , onkeypress="ajustaTelefone(this)", onkeyup="ajustaTelefone(this)" type="tel" name="telefone" id="telefones" placeholder="(+xx) xx-xxxxx-xxxx" minlength="17" maxlength="17" required> 
         </div> <br />

         <div>
            <label class="formfont" for="Sexo">Sexo:</label>
         </div>     
         <div>     
            <select class="boxsize" name="sexo" required>
              <option value="nenhum"></option>
              <option value="M">Masculino</option>
              <option value="F">Feminino</option>
              <option value="Outros">Outros</option>
            </select> 
         </div> <br />
      </div> 

    </div>

    
    
    <div class="div3e4e5">

      <div class="div3">
        <div>
           <label class="formfont" for="Login">Login:</label>
        </div>
        <div> 
           <input class="boxsize" onkeydown="ajustaLoginSenha(this)" , onkeypress="ajustaLoginSenha(this)", onkeyup="ajustaLoginSenha(this)" type="text" id="loginCadastro" name="login"  minlength="6" maxlength="6" placeholder="Digite seu Login" required>
        </div> <br /> 

        <div>
           <label class="formfont" for="Senha">Senha:</label>
        </div>
        <div> 
           <input class="boxsizepass" onkeydown="ajustaLoginSenha(this)" , onkeypress="ajustaLoginSenha(this)", onkeyup="ajustaLoginSenha(this)" type="password" id="senhaCadastro" minlength="8" maxlength="8" placeholder="********" required>
           <button type="button" id="eyebtn" class="btnpass" onclick="showpass()"></button>
         </div> <br />

        <div>
           <label class="formfont" for="Confirme sua Senha">Confirme sua Senha:</label>
        </div>
        <div> 
           <input class="boxsizepass" onkeydown="ajustaLoginSenha(this)" , onkeypress="ajustaLoginSenha(this)", onkeyup="ajustaLoginSenha(this)" type="password" id="senhaOK" name="senha" minlength="8" maxlength="8" placeholder="********" required>
           <button type="button" id="eyebtn2" class="btnpass" onclick="showpass1()"></button>
        </div> <br />
      </div>
      


      <div class="div4">
            <p class="formfont">Ao clicar em Cadastre-se, você concorda com nossos 
               <a class="TandP" href="#" id="termos">Termos</a> e 
               <a class="TandP" href="#" id="priv">Política de Privacidade</a>.
            </p>
      </div>
      

      <div class="div5">
            <button id="endbtn" name="cadastrar" class="btn1">Cadastrar-se</button>
            <button id="clearBtn" onclick="limparCampos()" class="btn1">Limpar Campos</button>
      </div>
      <div class="divhaveit">
            <p class="phaveit">Já é cadastrado?
               <a class="haveit" href="Login.php" id="forgot-pass"> Conecte-se.</a>
            </p>
      </div>
   </div>
         
      
    
    
   
   </form>
   </div> 
   </main>






<script src="Js/scriptCadastro.js"></script>
<script src="Js/jquery.mask.js"></script>

<script>
   $("#telefones").mask('+55 (00) 0000-0000')
   $("#telefones2").mask('+55 (00) 00000-0000')

</script>

    
</body>
</html>