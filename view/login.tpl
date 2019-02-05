{include file="inicio.tpl"}

            {foreach from = $result item = row} 
                <h5> Seja bem vindo {$row.usulogin}. </h5>   
            {/foreach}         
        <div class="loginSenha">          
           <form method="post" action="index.php" name="formLogin" class="form-horizontal">
                     <label for="usuario">Usuário:
                         <input type="text" id="usuario" name="login"class="form-control" value="Usuario">
                     </label>
                     <label for="senha">Senha:
                         <input type="password" id="senha" name="senha" class="form-control" value="Senha">
                     </label><br/>
                     <input type="submit" value="Entrar"class="btn-success" id="botao">

          </form>

{include file="fim.tpl"}
