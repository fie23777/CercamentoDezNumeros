<?php /* Smarty version 2.6.28, created on 2015-04-22 03:19:05
         compiled from principal.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inicio.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<html lang="en-pt">
    <head>
        <meta charset="UTF-8">
        <title>Mega sena</title>
        
    </head>
    <h3><?php echo $this->_tpl_vars['nome']; ?>
</h3>
    <body>
        
        <form method="post" action="Cercar.php">
            <label for="numeros">Numeros a ser cercados
                <input type="text" name="numeros">
            </label>
            <input type="submit" value="Cercar" name="cercar"><br/> 
        </form>
       
        <a href="sair.php">Sair</a>
        
    </body>
</html>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "fim.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>