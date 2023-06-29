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

    h2 {
        color: #FF6347;
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
                <h2>Sobre Nós</h2>
                <span class="data-postagem"></span>
                <div class="logo"> <img width="500px" src="image/logo.jpg"></div>
                <br><br><br>
                <p>O Projeto Kaizen nasce do desejo de ensinar o judô como prática de aprendizado para crianças e
                    adultos que se interessam pela melhora continua do ser humano e da comunidade.
                    Kaizen é uma palavra de origem japonesa que significa mudança para melhor, usada para transmitir a
                    noção de melhoria contínua na vida em geral, seja ela pessoal, familiar, social e no trabalho.
                </p><br><br>

                <h2>Sensei Julio</h2>
                <span class="data-postagem"></span>
                <div class="logo"> <img width="500px" src="image/sensei-julio.jpg"></div>
                <br><br><br>
                <p> Atleta de judô na categoria Master e Campeão brasileiro de 2018-M4
                    o criador do projeto Kaizen tambem é advogado especialista em direito empresarial e societário com
                    enfase no registro do comercio.
                    <br>
                    Recentemente foi empossado auditor do tribunal de justiça desportiva da federação paulisa de Judô.
                    <br>
                    O sensei Julio acredita que o tripé esporte, saúde e educação é capaz de impactar toda a sociedade
                    fazendo subir os indices de bem estar e baixar os de doenças e de violencia
                    sempre compromissado comm a verdade e cidadania

                </p>

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
