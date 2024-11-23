<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO - 19/11</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div id="cabeca">
        <div id="titulo">
            <h1>formulário de cadastro</h1>
        </div>
        <div id="nav">
            <div id="menu">
                <div class="item"><a href="#inicio">Início</a></div>
                <div class="item"><a href="#sobre">Sobre</a></div>
                <div class="item"><a href="#contato">Contato</a></div>
            </div>
        </div>
    </div>
    <div id="conteudo">
        <div id="introducao">
            <p>Cadastre-se usando o Formulário.</p>
        </div>
        <div id="form">
            <form id="registro">
                <h2 id="titulo-form">Formulário de Cadastro</h2>
                <div class="formulario">
                    <label for="name">Nome Completo:</label>
                    <input type="text" id="name" name="name" placeholder="Digite seu nome completo" required>
                </div>
                <div class="formulario">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                </div>
                <div class="formulario">
                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
                </div>
                <div class="botao">
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
    <div id="rodape">
        <p>&copy; Enzo Braga Martins.</p>
    </div>
</body>

</html>