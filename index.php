<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/logo.css">
</head>
<body>
    <style>
        body{
            margin-top: 67px;
        }

        .header{
            top: 0;
            position: fixed;
            width: 100%;
            z-index: 20;
        }

        .logo{
            background-color: #ffa7a7;
            color: #ffffff;
        }

        .menu{
            width: 35em;
            justify-content: space-around;
        }

        .menu-titu{
            margin: auto;
        }
        .menu-ul{
            width: 100%;
            margin: auto;
            justify-content: space-around;
            list-style: none;
        }
        
        .link:hover{
            color: #0000001f;
        }

        #saludo{
            background-color: #ffa7a7;
            color: #ffffff;
        }

        .card-title{
            text-align: center;
        }

        .card-text{
            display: flex;
        }

        .margen{
            margin: auto 5px;
        }
    </style>

    <header class="header navbar bg-body-tertiary">
        <nav class="container-fluid justify-content">
            <div class="logo">
                <p class="C">C</p>
                <p class="H">H</p>
            </div>
            <div class="d-flex menu">
                <h3 class="menu-titu">Portafolio</h3>
                <ul class="d-flex menu-ul">
                    <li><a class="nav-link link" href="#saludo">Acerca de</a></li>
                    <li><a class="nav-link link" href="">Proyectos</a></li>
                    <li><a class="nav-link link" href="">contacto</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div id="saludo" class="card">
        <img src="https://img.freepik.com/vector-gratis/flujo-diseno-codigo-binario_53876-97406.jpg" class="card-img" alt="..." width="100%" height="500">
        <div class="card-img-overlay">
            <div class="card-title">
            <h1>Christopher Silva</h1>
            <h2 >Programador</h2>
            </div>
            <br>
            <div class="card-text">
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla corrupti, vero, aspernatur quisquam delectus est asperiores reprehenderit impedit quam earum perspiciatis cupiditate blanditiis numquam tempore? Commodi et libero eaque eveniet.
            </p>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae, quas blanditiis! Eligendi maiores ullam optio, vero fugiat qui provident tempore eos facilis modi, totam eaque in quia excepturi nisi ducimus.
            </p>
            </div>
        </div>
    </div>

    <hr>

    <div class="row row-cols-1 row-cols-md-2 g-4 margen" >
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>

    <br>
    <hr>

    
</body>
</html>