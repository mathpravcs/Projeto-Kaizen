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

    .post {}

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
                <h2>O criador</h2>
                <span class="data-postagem"> postado em 07 de dezembro de 2022 </span>
                <div class="logo"> <img width="500px" src="image/jigoro.jpg"></div>
                <br><br><br>
                <div class="post">
                    <p>Jigoro Kano (em japonês: 嘉納治五郎, Kanō Jigorō) <br>
                        (Mikage, 28 de outubro de 1860 – 4 de maio de 1938) foi
                        o fundador da arte marcial judô.
                    </p>
                    <p>
                        Jigoro Kano, nasceu em 10 de dezembro de 1860 do calendário Gregoriano (dia 28 do décimo mês do
                        Período Man'en), no vilarejo de Mikage, na então Província Settsu (atual bairro de Higashinada,
                        cidade de Kobe, prefeitura de Hyogo no Japão), quinto filho de Jirōsaku Mareshiba Kanō. Seus
                        pais
                        queriam que seguisse a carreira de diplomata ou político, mas Jigorō Kanō preferiu o magistério.
                        Embora de personalidade marcante, possuía físico franzino, medindo 1,57 metro de estatura e
                        pesando
                        48 kg, o que dificultava o seu ingresso na maioria dos esportes.

                        Em 1870 com 10 anos de idade mudou-se com sua família para Tóquio onde estudou caligrafia, o
                        idioma
                        inglês, etc.
                    </p>
                    <p>
                        Aos 16 anos, decidiu fortificar o corpo, praticando a ginástica, o remo e o basebol. Mas estes
                        desportos eram demasiados violentos para sua débil constituição. Além disso, nas brigas entre
                        estudantes, Kano era sistematicamente vencido. Ferido na sua qualidade de filho de um Samurai
                        decidiu estudar o Ju-jutsu. Quem lhe ensinou os primeiros passos foi o professor Teinosuke Yagi.
                        Posteriormente, em 1877, matriculou-se na Tenjin shinyō-ryū, sendo discípulo do mestre
                        Hachinosuke
                        Fukuda. Em 1879, com a idade de 82 anos, Fukuda morreu e Kano herdou seus arquivos. Tornou-se em
                        seguida aluno do mestre Masatomo Iso, um sexagenário que possuía os segredos de uma escola
                        derivando
                        igualmente do Tenjin Shin'yō-ryū.

                        Continuando o seu treinamento, Jigoro Kano torna-se vice-presidente da escola. Infelizmente,
                        Masatomo Iso, morreu muito cedo e Kano novamente encontrou-se sem professor. Contudo Kano
                        continuou
                        a treinar intensamente, mas um bom professor lhe era indispensável. Foi então que procurou o
                        mestre
                        Tsunetoshi Iikubo que lhe ensinou a técnica da escola kitō-ryū. Como Kano até então só praticara
                        sempre as lutas corpo a corpo, sempre usando roupas normais, a escola de kitō ensinou-lhe o
                        combate
                        com armadura. Pouco a pouco, Kano fez a síntese das diversas escolas criando um sistema próprio
                        de
                        disciplina, continuando, no entanto a treinar com o mestre Iikubo até 1885.
                    </p>
                    <p>
                        Jigoro Kano desenvolveu as técnicas de amortecimento de quedas (ukemis), bem como criou uma
                        vestimenta especial para o treino do judô (o judogui), pois o uniforme utilizado pelos cultores
                        de
                        jujutsu, denominado hakamá provocava freqüentemente ferimentos. A nova arte do mestre tinha duas
                        formas distintas, uma abrangia as técnicas de queda, imobilizações, chaves e estrangulamentos.
                        Essa
                        forma evoluiu para o esporte de combate e a outra parte consistia nas técnicas de golpear com as
                        mãos e os pés, em combinações com agarramentos e chaves para imobilização, inclusive ataques em
                        pontos vitais, atemi waza. Essa forma evoluiu para a defesa pessoal, goshin-jutsu.
                    </p>
                    <p>Idealizado e desenvolvido por Jigoro Kano, o judô se tornou um dos mais conhecidos esportes do
                        mundo.
                        O combate esportivo de Jigoro Kano trazia a essência do esporte em sua criação.

                        Primeiro japonês a fazer parte do Comitê Olímpico, Kano sempre lutou para que o Japão fosse sede
                        dos
                        Jogos. Fato que só aconteceu após sua morte, nas olimpíadas de Tóquio 1964, ano em que pela
                        primeira
                        vez a luta criada por Jigoro Kano esteve no programa Olímpico.

                        Atualmente o judô é um dos esportes olímpicos, presente regularmente na programação do evento
                        desde
                        1972.</p>
                    <p>
                        Jigoro Kano nos legou vários manuscritos, nos quais em geral assinava com pseudônimos, dentre
                        estes,
                        um muito usado por ele era "Ki Itsu Sai" que quer dizer, tudo é unidade. Kano também era
                        poliglota,
                        pois falava quatro línguas além do japonês: francês, alemão, inglês e espanhol. Lamentavelmente
                        a 4
                        de maio de 1938, morre Jigoro Kano de problemas pulmonares, a bordo do transatlântico "Hikawa
                        Maru",
                        quando voltava do Cairo, onde havia presidido a assembléia geral do comitê internacional dos
                        jogos
                        olímpicos. Não houve para ele tempo de assistir a Universidade do Judô, mas tinha certeza da sua
                        perpetuação. "Quando eu morrer, o Judô Kodokan não morrerá comigo, porque muitas coisas virão a
                        ser
                        desenvolvidas se os princípios de minha arte continuarem sendo estudados".
                    </p>
                    <p>
                        Na Kodokan Jigoro Kano recebeu um jovem e o indicou como aluno para um dos professores da
                        escola,
                        Tsunejiro Tomita (4º Dan), o menor dos professores da Kodokan. Esse aluno era Mitsuyo Maeda,
                        mais
                        conhecido como Conde Koma, que após viajar pelo mundo demonstrando e vencendo várias artes
                        marciais
                        pelos países que passava, acabou se instalando no Brasil, no estado do Pará. Foi em Belém que
                        Maeda
                        teve entre seus alunos Carlos Gracie e Luiz França, que posteriormente dariam origem as duas
                        escolas
                        de jiu jitsu brasileiras.
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
