<?php /* Smarty version 2.6.28, created on 2015-04-22 03:10:08
         compiled from mostraUsu.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inicio.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      
<h3><?php echo $this->_tpl_vars['nome']; ?>
</h3>
        
    <table border="1" class="table">
            
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th colspan="2">Login</th>

            </tr>
            
            <?php $_from = $this->_tpl_vars['lista']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
                
                <tr>
                    <td><?php echo $this->_tpl_vars['row']['usuNome']; ?>
 </td>
                    <td><?php echo $this->_tpl_vars['row']['usuEmail']; ?>
 </td>
                    <td><?php echo $this->_tpl_vars['row']['usulogin']; ?>
 </td>
                    <td><a href="ControleUpdate.php?edit=<?php echo $this->_tpl_vars['row']['usuId']; ?>
">Edite</a> | <a href="?delete=<?php echo $this->_tpl_vars['row']['usuId']; ?>
">Delete</a></td>
                </tr>
                
            <?php endforeach; endif; unset($_from); ?>
            
        </table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "fim.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>