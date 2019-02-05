<?php /* Smarty version 2.6.28, created on 2015-05-18 23:17:26
         compiled from entreEmContato.tpl */ ?>
<!DOCTYPE html>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inicio.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <h2>Formulário de contato</h2>
    <form method="post"   action="envioEmail.php">
    <p class="name">
        <label for="name">Nome</label>
        <input type="text" placeholder="Seu Nome" id="nomeEnvio" />
    </p>
    <p class="email">
        <label for="email">E-mail</label>
        <input type="text" id="emailEnvio" placeholder="mail@exemplo.com.br" />
    </p>
    <p class="text">
        <label for="mensagem">Mensagem</label>
        <textarea placeholder="Escreva sua mensagem" id="txtArea" /></textarea>
    </p>
    <p class="submit">
        <input type="submit" id="btnContato" value="Enviar" />
    </p>
    </form>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "fim.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>