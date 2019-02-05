<!DOCTYPE html>
{include file="inicio.tpl"}

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

    {include file="fim.tpl"}