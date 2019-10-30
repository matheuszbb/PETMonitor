<!DOCTYPE html>
<html lanng="pt-br">
    <head>
        <link rel="shortcut icon" href="_imagens/digivice1.png" type="image/x-png"/>
        <meta charset="utf-8"> 
        <title>PET Monitor - Cadastro de Usuarios</title>
        <link rel="stylesheet" href="_css/cadastro usuario.css">
    </head>
    <body>
        <section>
             <form method="get" action="valida cadastro usuario.php">
                 <fieldset>
                    <legend>Cadastro de Usuarios</legend> 
                    <label for="nome">Nome<br></label>
                    <input class ="campos" type="text" id="nome" maxlength="40" name="nome" required autofocus placeholder="Nome"><br>
<br>

                    <input type="submit" value="Salvar Cadastro" class="btn salvar">
                    <input type="reset" value="Limpar Dados" class="btn limpar">

                </fieldset>
            </form>
        </section>
    </body>
</html>