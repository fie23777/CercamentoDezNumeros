<?php /* Smarty version 2.6.28, created on 2015-05-05 23:37:54
         compiled from login.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inicio.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <?php $_from = $this->_tpl_vars['result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?> 
                <h5> Seja bem vindo <?php echo $this->_tpl_vars['row']['usulogin']; ?>
. </h5>   
            <?php endforeach; endif; unset($_from); ?>         
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

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "fim.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>