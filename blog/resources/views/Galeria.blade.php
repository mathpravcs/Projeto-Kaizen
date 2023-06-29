<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        font-size: 1em;
        font-family: "Trebuchet Ms", Helvetica, sans-serif;
        background: #e6e6e6;
    }

    #Area-cabeçalho {
        background-color: black;
        padding: 15px;
        text-align: center;
    }

    #Area-logo,
    #Area-menu {
        padding: 10px;

    }

    #Area-principal {
        width: 920px;
        margin: 0 auto;
        padding: 15px;
    }

    #Area-postagens {
        width: 660px;
        float: left;
    }

    #Area-lateral {
        width: 240px;
        float: right;
    }

    .postagem {
        padding: 20px;
        margin-bottom: 20px;
        background: white;
    }

    #rodape {

        clear: both;
        text-align: center;
        padding: 15px;
        background: #CCC;
    }

    #Area-postagens,
    #Area-lateral {
        background: orange;

    }

    .data-postagem {
        font-size: 0.8em;
        border-bottom: 1px solid #f4f4f4;
        padding-bottom: 10px;
        margin-bottom: 10px;
        display: block;
    }

    h1 {
        color: #ff7b5a;
        font-size: 2.5em;
    }



    .branco {
        color: white;
    }

    #Area-cabeçalho a:link,
    #Area-cabeçalho a:visited {
        color: #fff;
        padding: 8px 12px;
        text-decoration: none;
    }

    #Area-cabeçalho a:hover {
        color: #FF6347;
        background: #fff;
        text-decoration: none;
    }

    .logo {
        display: flex;
        justify-content: center;
    }

    p. {
        color: #ff7b5a
    }

    a:hover {
        text-decoration: underline;
    }
</style>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Kaizen - Judô para todos</title>
    <link rel="stylesheet" type="text/css" href="/public/assets/app.css">
</head>

<body>
    <div id="Area-cabeçalho">

        <div id="Area-logo">
            <h1>Projeto<span class="branco">Kaizen</span></h1>
        </div>

        <div id="Area-menu">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('jigoro.kano') }}">Jigoro Kano</a>
            <a href="{{ route('kodokan') }}">Kodokan</a>
            <a href="{{ route('galeria') }}">Galeria</a>
            <a href="{{ route('onde.treinar') }}">Onde Treinar</a>

        </div>

    </div>
    <div id="Area-principal">

        <div id="Area-postagens">

            <div class="postagem">
                <h2>Galeria de fotos </h2>
                <span class="data-postagem"></span>
                <p> <strong>1º Torneio de Judô Kaizen </p> </strong>
                <br>
                <div class="logo">
                    <img width="200px" src="image/galeria/foto1.jpg">
                    <div><img width="200px"src="image/galeria/foto2.jpg"></div>
                    <div><img width="200px" src="image/galeria/foto3.jpg"></div>
                </div>
                <br>
                <div class="logo"> <img width="200px" src="image/galeria/foto8.jpg">
                    <div> <img width="200px" src="image/galeria/foto5.jpg"></div>
                    <div> <img width="200px" src="image/galeria/foto6.jpg"></div>
                </div>
                <br>
                <div class="logo"> <img width="200px" src="image/galeria/foto7.jpg">
                    <div><img width="200px" src="image/galeria/foto4.jpg"></div>
                    <div><img width="200px" src="image/galeria/foto9.jpg"></div>
                </div>

            </div>
        </div>
    </div>

    <div id="Area-lateral">
        Area Lateral
    </div>

    <div id="rodape">
        Todos os direitos reservados
    </div>
    </div>

</body>

</html>
