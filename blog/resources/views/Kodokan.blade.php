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
                <h2>Kodokan</h2>
                <span class="data-postagem"> postado em 07 de dezembro de 2022 </span>
                <div class="logo"> <img width="600px" src="image/kodokan.png"></div>
                <br><br><br>
                <p>O símbolo do Kodokan é o yata no kagami (矢田はかがみ, literalmente Arco Yata). É composto por um circulo
                    vermelho que representa o Sol (que por sua vez representa o Japão), que fica no centro de uma figura
                    octagonal (oito lados). Simboliza um "espelho mágico", com o poder de revelar o que há na alma de
                    quem o olha. É uma das três relíquias passadas pelos deuses ao primeiro imperador japonês, e
                    significa sabedoria ou honestidade (a interpretação varia na literatura).

                    Não confundir com a sakura no hana (桜の花, literalmente Flor de Cerejeira). A flor de cerejeira, além
                    de ser um dos simbolos do Japão, representa, geralmente, as escolas antigas de Ju-Jutsu, caso que
                    não acontece com o Kodokan. O desenho que representa a sakura no hana é parecido com o do yata no
                    kagami, diferenciando-se apenas, por este conter somente cinco lados, ao invés dos oito, como o
                    simbolo do Kodokan.</p><br><br>
                <p>Em maio de 1882, no templo de Eishoji de Kita Inaritcho, bairro de Shimoya em Tóquio, aos 21 anos,
                    Jigoro Kano inaugura sua primeira escola de judô, denominada Kodokan (onde "kō" significa ensinar;
                    "dō" significa caminho, referindo-se especificamente ao judô; e "kan" significa edifício público ou
                    instituto). O Kodokan estava localizada no segundo andar de um templo budista Eishoji de Kita
                    Inaritcho, onde havia doze jos (jo é uma medida de superfície, módulo de tatame). O primeiro aluno
                    inscreveu-se em 5 de Junho de 1882, chamava-se Tomita. Depois vieram Higushi, Arima, Nakajima,
                    Matsuoka, Amano Kai e o famoso Shiro Saigo. As idades oscilavam entre quinze e dezoito anos. Kano
                    albergou-os e ocupou-se deles como se fosse um pai. Foi um período difícil, mas apaixonante, o jovem
                    professor não tinha dinheiro e o shiai-jo media 20m², mas a escola progrediu e em breve tornou-se
                    célebre.
                </p>
                <p>Durante dois anos, o idealizador do moderno jujutsu atravessou uma difícil fase, principalmente pela
                    quase ausência de recursos financeiros para a manutenção da academia.

                    Os mais temidos lutadores da época, impulsionados pela inveja, não se cansavam em desafiar os
                    discípulos de Jigoro Kano. Houve muitos encontros memoráveis com o intuito de testar a eficácia do
                    Judô Kodokan.
                    <br>
                    Certa vez um lutador, conhecido por Tanabe, venceu os melhores alunos de Jigoro Kano. Tratava-se de
                    um grande especialista em técnicas de shime-waza (estrangulamentos), aplicadas no solo. Tão logo um
                    judoca o projetasse, Tanabe encaixava-lhe um estrangulamento. Dessas derrotas, Kano aprendeu uma
                    grande lição. Era necessário aprimorar o judô nas técnicas de domínio, particularmente as
                    desenvolvidas na luta de solo. Tanabe foi o único lutador que conseguiu vencer os discípulos de
                    Kano.

                    Os alunos do kodokan tinham fama de serem imbatíveis. Por isso, eram insistentemente desafiados.
                    Aqueles que conseguiam uma vitória sobre um dos alunos da kodokan, na certa, cresciam em fama.
                    <br>
                    Naquela época utilizava-se ainda, o sistema de luta por desistência. Um dos combates que ficou na
                    história foi o de Shiro Saigo contra o mais temido cultor de jujutsu da yōshin-ryū, numa memorável
                    luta, que parecia interminável. A propósito de Shiro Saigo, foi escrito um romance de aventura por
                    Tsuneo Tomita, filho de Tomita Tsunejirō, contando as suas proezas no judô, com o nome de Sugata
                    Sanshiro, inclusive serviu de enredo a vários filmes.
                    <br>
                    Mas foi só no final de 1886, após uma célebre competição, contra várias escolas de jujutsu,
                    organizada pela polícia, que definitivamente ficou constatado o grande valor do judô kodokan. O
                    resultado dessa jornada constituiu-se num marco decisivo na aceitação do judô, com o reconhecimento
                    do povo e do governo que passaram oficialmente a prestigiar o judô kodokan. Depois da célebre
                    vitória de 1886, como ficou conhecida, o judô kodokan começou a progredir com passos confiantes.
                    <br>
                    A fórmula técnica do judô kodokan foi completada em 1887, enquanto a sua fase espiritual foi
                    gradativamente elevada até a perfeição, aproximadamente, em 1922. Nesse ano, a Sociedade Cultural
                    Kodokan foi inaugurada e um movimento social foi lançado, com base nos axiomas seryoku zen'yo (lit.
                    máxima eficácia) e jita kyoei (lit. prosperidade e benefícios mútuos).
                    <br>
                    Entretanto, em 1897, quando a kodokan estava instalada em Shimotomizaka, possuindo uma área de 207
                    tatames, o governo japonês funda uma escola nacional, que congregaria todas as artes marciais, a
                    butokukai.
                    <br>
                    Apesar de Jigoro Kano ter idealizado o judô, em pouco tempo a butokukai tornar-se-ia uma respeitável
                    rival da kodokan. Posteriormente, as escolas superiores e profissionais da Universidade de Tóquio
                    fundariam uma outra entidade, a kosen. Como é fácil adivinhar, a butokukai e a kosen começaram a
                    competir com a kodokan. A kodokan tinha perdido a sua hegemonia, por outro lado, era o judô que
                    ganhava um maior número de praticantes.
                    <br>
                    Jigoro Kano, com a finalidade de iniciar uma campanha de divulgação do judô, no ocidente, em 1889,
                    visita a Europa e os Estados Unidos da América, proferindo palestras e demonstrações.
                    <br>
                    Em 1909, um fato marcante parecia devolver a hegemonia do judô à kodokan. O governo japonês resolve
                    tornar a kodokan uma instituição pública, uma vez que a prática do judô estava tendo ótima
                    aceitação.
                    <br>
                    Com a mulher japonesa começando a entusiasmar-se pela prática do judô, em 1923, a kodokan inaugurou
                    um departamento feminino. Em 1934, a Kodokan estaria instalada em edifício de três andares, ocupando
                    uma área de 2000m², aproximadamente.
                    <br>
                    Nessa época o judô começava a ser introduzido em quase todas as nações civilizadas do mundo,
                    todavia, no ocidente o termo jujutsu ainda era empregado, embora o nome Jigoro Kano fosse citado.
                    <br>
                    Em 1937, o Conselho da Indústria do Turismo, órgão do governo japonês, editava a tradução em inglês
                    do primeiro livro escrito por Jigoro Kano denominado judô (Jujutsu).
                    <br>
                    Nessa obra o judô é abordado sob vários aspectos inclusive tecia inúmeras considerações sobre o
                    atemi-waza (técnicas de ataque a pontos vitais). Todavia, nenhuma linha era escrita sobre as regras
                    de competições.
                    <br>
                    Como em 1938, o Japão começava a sentir a guerra, os militares deram um valor especial às chamadas
                    artes marciais, que começaram a ser praticadas em todo Japão, com um real espírito guerreiro
                    (bushido). A butokukai recebia alunos de todas as partes do Japão para a cultura do jujutsu, do
                    kendô (espécie de esgrima japonesa), do caratê e do kyudô (arte de atirar flechas), para uma real
                    aplicação durante a guerra.
                    <br>
                    Após a guerra, todas as atividades que inspirassem o bushido, foram proibidas pelos
                    norte-americanos. Os japoneses não mais podiam praticar o judô.
                    <br>
                    Entretanto, em 1946, os professores da kodokan foram autorizados a ensinar o judô às tropas
                    norte-americanas. Conhecendo o real espírito do judô de Jigoro Kano, os norte-americanos liberaram a
                    sua prática, inclusive nas escolas, por não a considerar uma perigosa arte marcial, tempos depois.
                    <br>
                    Em 1948, é fundada no Japão a Federação Nacional de Judô, iniciando-se os primeiros campeonatos de
                    âmbito nacional, depois da guerra. A butokukai havia sido definitivamente interditada e a kosen
                    ficaria subordinada a kodokan.
                    <br>
                    Em março de 1958, é inaugurado o novo Instituto Kodokan, denominada Meca do judô mundial, num
                    edifício especialmente construído para a organização e a administração do judô, no Japão e no mundo,
                    com um dojo de 500 tatames e seis outros menores, sendo três com 108 tatames e outros três com 54
                    tatames, que seriam utilizados para os mais diversos objetivos do ensino e do treinamento, com
                    departamentos especiais para crianças, mulheres, estudantes, competidores de alto nível e
                    estrangeiros, além de abrigar dependências para toda à parte de administração, alojamento,
                    restaurante, totalizando 41 áreas específicas.
                </p>
                <p>

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
