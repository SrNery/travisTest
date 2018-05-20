<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="funcao.js"></script> 
    <title>Cadastro</title>
</head>
<body>
    <!--Topo do Site-->
    <div class='topo'>        
        <a id='nome_site' href='index.php'>Cadastro<span id='dotcom'>.com</span></a>
        <div id='referencia' style="font-family:'Segoe UI',Arial,sans-serif">O Melhor Site de Cadstro do IFBA</div>       
    </div>
     <!--MENU-->
    <nav class="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="cadastro.php" class="active" style="border-right: 2px solid #bbb;">Cadastro</a></li>
            <li><a href="relatorio.php">Relatório</a></li>            
        </ul>
    </nav>
    <!--Corpo do Site-->
    <div>          
        <article >
            <h1 id="cad">Cadastro</h1>             
        <div>
            <form action="/action_page.php">
                <label for="name">Nome Completo:</label>
                <input type="text" id="name" name="nomeCompleto" placeholder="Seu nome..">

                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" placeholder="Insira o CPF..">


                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" placeholder="Seu Endereço..">

                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" placeholder="Seu E-mail..">

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" value="123456">
                <img id="olho" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABDUlEQVQ4jd2SvW3DMBBGbwQVKlyo4BGC4FKFS4+TATKCNxAggkeoSpHSRQbwAB7AA7hQoUKFLH6E2qQQHfgHdpo0yQHX8T3exyPR/ytlQ8kOhgV7FvSx9+xglA3lM3DBgh0LPn/onbJhcQ0bv2SHlgVgQa/suFHVkCg7bm5gzB2OyvjlDFdDcoa19etZMN8Qp7oUDPEM2KFV1ZAQO2zPMBERO7Ra4JQNpRa4K4FDS0R0IdneCbQLb4/zh/c7QdH4NL40tPXrovFpjHQr6PJ6yr5hQV80PiUiIm1OKxZ0LICS8TWvpyyOf2DBQQtcXk8Zi3+JcKfNafVsjZ0WfGgJlZZQxZjdwzX+ykf6u/UF0Fwo5Apfcq8AAAAASUVORK5CYII="/><br>

                <label for="pais">País</label>
                <select id="pais" name="pais">
                <option value="australia">Australia</option>
                <option value="usa">Brasil</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>                
                </select>            
                <input type="submit" value="Cadastrar">
            </form>
            </article>
        </div>
    </div>  
        
    <!--RODAPE-->
    <footer>Copyright &copy; W3Schools.com</footer>
</body>
</html>