<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap');

        body{
            margin: 0;
            font-family: 'Noto Sans', sans-serif;
            text-align: center;
            width: 100vw;
            height: 100vh;
            background: #201b2c;
            display: flex;
            justify-content: center;
            align-items:center;
            flex-direction: column;
            color: aqua;
        }

        .btn-login{
            margin-top: 10px;
            width: 100%;
            padding: 16px 0px;
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
            display: flex;
            flex-direction: column;
        }

        a{
            text-decoration: none;
        }
        
    </style>
</head>
<body>
    <main>
        <h1>Acesso Permitido</h1>
        <div class="btn-login"><a href="menu.php">Ir para Menu</a></div>
    </main>
</body>
</html>