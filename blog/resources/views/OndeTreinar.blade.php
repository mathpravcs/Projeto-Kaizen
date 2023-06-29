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
                <h2>Locais para treinar </h2>
                <span class="data-postagem"></span>
                <div class="logo"> <img width="500px" src="image/aulas.jpg"></div>
                <br><br><br>
                <div id="Area-menu">
                    <p>
                        <a
                            href="https://www.google.com/maps/place/Centro+Esportivo+Educacional+Raul+Tabajara/@-23.5234499,-46.6528723,3a,75y,105.07h,93.16t/data=!3m6!1e1!3m4!1skZ41aCk7cMjqHzUl2Lmsrw!2e0!7i16384!8i8192!4m13!1m7!3m6!1s0x94ce580cfcd3be6d:0x8649265d3aef65b5!2sR.+Anhanguera,+484+-+Barra+Funda,+S%C3%A3o+Paulo+-+SP,+01135-000!3b1!8m2!3d-23.5234561!4d-46.6530433!3m4!1s0x94ce580ce214d787:0x346ac5b0111ff9b9!8m2!3d-23.5235628!4d-46.6526403">
                            Polo Barra Funda</a>
                        <br>
                        <strong>Horarios : Segundas, terças e quartas-feiras
                            das 19:00 as 19:45 - infantil
                            das 20:00 as 21:30 - adulto </strong>
                    </p><br>
                    <p>
                        <a
                            href="https://www.google.com/maps/place/avenida+santa+in%C3%AAs+3321/@-23.4598125,-46.6448017,3a,75y,211.35h,90t/data=!3m4!1e1!3m2!1sycQDeDv0YrFPkxeD_0ONpw!2e0!4m2!3m1!1s0x94cef716e992196d:0x5d07d8b7ac845bf2?sa=X&ved=2ahUKEwjSqv-rjIH9AhWDIrkGHVZeD8wQxB16BAgJEAM">
                            Polo
                            EcoCultural Pedra Branca </a>
                        <br>
                        <strong>
                            Horario: Domingo as 08:00
                        </strong>
                    </p><br>
                    <p>
                        <a
                            href="https://www.google.com/maps/place/rua+nazir+miguel+849/@-23.6006708,-46.7890238,3a,75y,201.83h,90t/data=!3m4!1e1!3m2!1saUtJgASVLVYYCwXzLyZFnA!2e0!4m2!3m1!1s0x94ce5501cc68ac17:0xb53c719fe902ea39?sa=X&ved=2ahUKEwjzvL6Fj4H9AhVSuZUCHRScBVYQxB16BAgIEAM">
                            Polo Uirapuru</a>
                        <br>
                        <strong>
                            Horario: Sabado as 09:00
                        </strong>
                    </p>
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
