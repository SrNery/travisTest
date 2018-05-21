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
        </article>
        <form method="post" action="cadastrar.php">
            <Fildset id="usuario"><legend>Identificação do Usuário</legend>

                <p>Nome:<input type="text" id="tNome" nome="cNome" placeholder="Seu nome.."></p>

                <p>CPF:<input type="text" id="tCpf" nome="cCpf" placeholder="Seu CPF.."></p>

                <Fildset = id"sexo"><legend>Sexo:</legend>
                    <input type="radio" id="cMas" nome="tSexo"/><label for="cMas">Masculino</label>
                    <input type="radio" id="cFem" nome="tSexo"/><label for="cFem">Feminino</label>                    
                </fildset>

                <p>E-Mail:<input type="email" id="tEmail" nome="cEmail" placeholder="Digite seu E-mail"></p>        
                <fildset><leged>Identificação:</legend>
                <input type="radio" id="cUser" nome="tIdent"/><label for="cUser">Usuário</label>
                <input type="radio" id="cAdm" nome="tIdent"/><label for="cAdm">Administrador</label>
                </fildset>

                <p>Data de Nascimento:<input type="date" id="tDNasc" nome="cDNasc"</p>
            </Fildset>

            <Fildset id="endereco"><legend>Endereço do Usuário</legend>
                <p>Logradouro: <input type="text" id="cRua" name="tRua" placeholder="Rua, Av, Trav,.."> </p>
                <p>Numero: <input type="number" id="cNum" name="tNum" min="0" max"9999" placeholder="Nmero da Casa"></p>
                <p>Cidade: <input type="text" id="cCidade" name="tCidade" placeholder="Cidade Atual"></p>
                <p>Estado: <input type="text" id="cUF" name="tUF" placeholder="Estado Atual"></p>
                <p>CEP: <input type="text" id="cCep" name="tCep" placeholder="Somente Números"></p>
            </Fildset>
            [botão enviar]
        </form>    
    </div>  
        
    <!--RODAPE-->
    <footer>Copyright &copy; Rodrigo&Najla</footer>
</body>
</html>