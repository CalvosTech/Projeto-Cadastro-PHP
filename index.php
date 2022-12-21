<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap');

        body{
            margin: 0;
            font-family: 'Noto Sans', sans-serif;
        }

        body *{
            box-sizing: border-box;
        }

        .main-login{
            width: 100vw;
            height: 100vh;
            background: #201b2c;
            display: flex;
            justify-content: center; /* justifica no eixo x */
            align-items: center; /* justifica no eixo y */
        }

        .left-login{
            width: 50vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .left-login > h1{
            font-size: 3vw;
            color: #77ffc0;
        }

        .left-login-image{
            width: 35vw;
        }

        .right-login{
            width: 50vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-login{
            width: 60%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 30px 35px;
            background: #2f2841;
            border-radius: 15px;
            box-shadow: 0px 10px 40px #00000056;
            box-sizing: border-box;
        }

        .card-login > h1{
            color: #00ff88;
            font-weight: bold;
            margin: 0;
        }

        .textfield{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            margin: 10px 0px;
        }

        .textfield > input{
            width: 100%;
            border: none;
            border-radius: 10px;
            padding: 15px;
            background: #514869;
            color: aliceblue;
            font-size: 12pt;
            box-shadow: 0px 10px 40px #00000056;
            outline: none;
            box-sizing: border-box;
        }

        .textfield > label{
            color: aliceblue;
            margin-bottom: 10px;
        }

        .textfield > input::placeholder{
            color: lightgrey;
        }

        .btn-login{
            width: 100%;
            padding: 16px 0px;
            margin: 25px;
            border: none;
            border-radius: 8px;
            outline: none;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 2px;
            color: #2b134b;
            background-color: #00ff88;
            cursor: pointer;
            box-shadow: 0px 10px 40px -12px #00ff8052;

        }

        @media only screen and (max-width: 950px){
            .card-login{
                width: 85%;
            }
            
        }

        @media only screen and (max-width: 600px){ /* Dispositivos Móveis */
            .main-login{
                flex-direction: column;
            }
            .left-login > h1{
                display: none;
            }

            .left-login{
                width: 100%;
                height: auto;
            }

            .right-login{
                width: 100%;
                height: auto;
            }

            .left-login-image{
                width: 35vh;
            }

            .card-login{
                width: 90%;
                box-sizing: border-box;
            }
        }
    </style>
</head>
<body>
<?php

if(!empty($_POST))
{
    $email = $_POST['mail'];
    $senha = $_POST['senha'];
    
    if(($email == "admin")&&($senha == "admin"))
    {
        header('location:login.php');
    }
    else
    {
        echo "<script>alert('Email ou senha incorreto');</script>";
    }
}
?>
    <form action="#" method="post" autocomplete="off">
    <div class="main-login">
        <div class="left-login">
            <h1>Cadastro</h1>
            <img src="./images/animacao-computer.svg" alt="animacao" class="left-login-image">
        </div>
        <div class="right-login">
            <div class="card-login">
                    <h1>LOGIN</h1>
                    <div class="textfield">
                        <label for="login">Login</label>
                        <input type="text" name="mail" id="mail" placeholder="Login" size="10" required >
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Senha" size="10" required >
                    </div>

                    <input type="submit" value="Autenticar" class="btn-login">
                </div>
            </div>
    </div>
    </form>


</body>
</html>
