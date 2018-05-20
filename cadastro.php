<!DOCTYPE html>
<html lang="en">
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
                <label for="name">Nome Completo</label>
                <input type="text" id="name" name="nomeCompleto" placeholder="Seu nome..">

                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" placeholder="Seu E-mail..">

                <label for="pais">País</label>
                <select id="pais" name="pais">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
                </select>            
                <input type="submit" value="Submit">
            </form>
            </article>
        </div>
    </div>  
        
    <!--RODAPE-->
    <footer>Copyright &copy; W3Schools.com</footer>
</body>
</html>