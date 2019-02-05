{include file="inicio.tpl"}

   <div id="login" class=" logoLogin">
            
             <div id="mensagem" class="mensagem logMensagem" >
       
            </div>          
            
       <form method="post" action="controleCadastro.php" name="formCadastro" class="form-horizontal">
                <label for="nome">Nome:
                    <input type="text" id="nome" name="nome" placeholder="Nome" class="form-control">
                </label>
                <label for="email">Email:
                    <input type="text" id="email" name="email" placeholder="Email" class="form-control">
                </label>
                <label for="UsuLogin">Login:
                    <input type="text" id="UsuLogin" name="UsuLogin" placeholder="Login" class="form-control" >
                </label>
                <label for="cadSenha">Senha:
                    <input type="password" id="cadSenha" name="cadSenha" placeholder="Senha" class="form-control" >
                </label><br/>
                <input type="submit" value="Cadastrar"class="btn-success" id="btnCadastro" name="cadastrar">

            </form>
    
  </div>

{include file="fim.tpl"}