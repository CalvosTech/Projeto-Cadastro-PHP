<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Menu Principal</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap');

        /* Zerando a Margin da página e colocando uma fonte para o body */
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: 'Noto Sans', sans-serif;
            font-size: 15px;
            background-color: #0d2730f5;
        }

        header{
            background: #201b2c;
            padding: 3.3vh 0vw;
        }

        .logo{
            width: 5%;
        }

        .imagem{
            width: 55vw;
            margin-left: 23vw;
        }
        
        /* Editando o menu */
        .btn {
            
    color: aliceblue;
    /* width: auto; */
    border-radius: 20px;
    /* width: 6vw; */
    /* height: 5.5vh; */
    text-align: center;

    text-align: center;
    justify-content: center;
}

a.dropdown-item{
    color: #00ff88;
}

        .link{
            left: 80vw;
            top: 1.6vh;
        }

        .cabecalho{
    /* height: 100vh; */
    /* position: sticky; */
    top: 10vh;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 5px;
        }

        .menu{
            
            list-style: none;
            /* border: 1px solid rgb(0, 0, 0); */
            display: flex;
            list-style: none;
            /* border: 1px solid rgb(0, 0, 0); */
            border-right: 0px;
            float: left;
            /* padding: 13px;*/
        }

        

        /* Estilizando os Links */

        .menu > a{
            color: #00ff88;
        }

        .menu li a{
    color: #00ff88;
    display: block;
    /* background-color: #00ff88; */
    -webkit-transition: background 100ms ease-in-out, color 100ms ease-in-out;
    transition: background 100ms ease-in-out, color 100ms ease-in-out;

        }

        .menu li a:hover{
            border-radius: 20px;
            
            color: white;
            /*-moz-box-shadow: 0 3px 10px 0 1;
            -webkit-box-shadow: 0 3px 10px 0 1;*/
        }

        /* Fazendo o menu suspenso */

        .menu li ul {
    padding: 5px;
    /* top: 25px; */
    /* left: 0; */
    /* background-color: #fff; */
     display: none; 
    /* display: flex; */
    flex-direction: column;
}

        .btn:hover{
            color: #00ff88;
        }

        .menu li ul li{
            display:block;
            width:125px;
        }

        a{
            color: #00ff88;
        }

        @media screen and (max-width:750px) {
            .logo{
                width: 15vw;
            }

            ul{
                padding: 0;
            }
        }
    </style>
</head>
<body>
        <header>
        <ul>
            <div class="cabecalho">
                <img src="./images/animacao-logo.svg" alt="logo" class="logo">
               <!-- <ul class="menu">
                    <li>
                        <a href="#">Cadastro</a>
                        <ul>
                            <li><a href="./formCadCliente.php">Cliente</a></li>
                            <li><a href="./formCadFuncionario.php">Funcionário</a></li>
                            <li><a href="./formCadFornecedor.php">Fornecedor</a></li>
                            <li><a href="./formCadProduto.php">Produto</a></li>
                            <li><a href="./formCadUsuario.php">Usuário</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Consulta</a>
                        <ul>
                            <li><a href="./ConsultCliente.php">Cliente</a></li>
                            <li><a href="./ConsultFuncionario.php">Funcionário</a></li>
                            <li><a href="./ConsultFornecedor.php">Fornecedor</a></li>
                            <li><a href="./ConsultProduto.php">Produto</a></li>
                            <li><a href="./ConsultUsuario.php">Usuário</a></li>
                        </ul>
                    </li>
                </ul>
                
            </div>-->
            <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
    Cadastro
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
  <li><a class="dropdown-item"  href="./formCadCliente.php">Cliente</a></li>
      <li><a class="dropdown-item" href="./formCadFuncionario.php">Funcionário</a></li>
      <li><a class="dropdown-item" href="./formCadFornecedor.php">Fornecedor</a></li>
      <li><a class="dropdown-item" href="./formCadUsuario.php">Usuário</a></li>
      <li><a class="dropdown-item" href="./formCadProduto.php">Produto</a></li>
     
  </ul>
</div>



<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
    Consulta
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item active" href="./ConsultCliente.php">Cliente</a></li>
    <li><a class="dropdown-item" href="./ConsultFuncionario.php">Funcionário</a></li>
    <li><a class="dropdown-item" href="./ConsultFornecedor.php">Fornecedor</a></li>
    <li><a class="dropdown-item" href="./ConsultProduto.php">Produto</a></li>
    <li><a class="dropdown-item" href="./ConsultUsuario.php">Usuário</a></li>
  </ul>
</div>

                <div class="link">
                <a href="index.php" class="btn">Sair</a>
                </div>
        </ul>
    
        


        </header>
        <main>
            <div class="imagem">
                <figure><img src="./images/animacao-programmer.svg" alt="animacao"></figure>
            </div>
        </main>
</body>
</html>