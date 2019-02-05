{include file="inicio.tpl"}
      
<h3>{$nome}</h3>
        
    <table border="1" class="table">
            
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th colspan="2">Login</th>

            </tr>
            
            {foreach from = $lista item = row}
                
                <tr>
                    <td>{$row.usuNome} </td>
                    <td>{$row.usuEmail} </td>
                    <td>{$row.usulogin} </td>
                    <td><a href="ControleUpdate.php?edit={$row.usuId}">Edite</a> | <a href="?delete={$row.usuId}">Delete</a></td>
                </tr>
                
            {/foreach}
            
        </table>

{include file="fim.tpl"}