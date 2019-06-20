<?php 
include_once "includes/header.php";
?>


<article class="form">
    <h1>Formulário</h1>
    <form action="formulario.php" id="formulario" method="post" autocomplete="off">
        <label for="nome">Nome</label><br>
        <input type="text" id="nome" name="nome" placeholder="Seu nome" required><br><br>
        <label for="tel">Telefone</label><br>
        <input type="tel" id="tel" name="tel" placeholder="(xx) x xxxx-xxxx" required><br><br>   
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" placeholder="esgovoski@gmail.com" required><br><br>
        <label for="mensagem">Mensagem</label><br>
        <textarea name="mensagem" id="mensagem" cols="50" rows="5" placeholder="Digite sua mensagem aqui" required></textarea><br><br>
        <input class="btn-submit" type="submit" value="Enviar">
    </form>
</article>



<?php
include_once "includes/footer.php";
?>