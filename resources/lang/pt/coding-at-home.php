<?php

return [

    'title' => 'Coding@Home',
    'questions' => 'Perguntas',
    'material' => [
        "required" => "Material necessário",
        "chequered" => "tabuleiro quadriculado",
        "footprint" => "peças com imagens de pegadas"
    ],
    'intro' => [
        'title' => 'Introdução à Coding@Home',
    ],
    'explorer' => [
        'title' => 'O Explorador',
        'text' => '«O Explorador» é a primeira atividade da Coding@Home. Desloque o explorador pelo tabuleiro para chegar ao destino, após passar pelo maior número de casas possível. ',
        'questions' => [
            'content' =>
                [
                    1 => 'P1. Com as posições de partida e de chegada indicadas no vídeo, é possível o explorador passar por todas as casas do tabuleiro?',
                    2 => 'P2. Quais são as posições de partida e de chegada que impedem o explorador de visitar o maior número de casas no tabuleiro?'
                ]

        ]

    ],

    'right-and-left' => [
        'title' => 'Direita e esquerda',
        'text' => '«Direita e esquerda» é um jogo competitivo e colaborativo. As duas equipas colaboram para criar um caminho em direção ao destino, enquanto competem para utilizar o maior número possível de peças que lhes são atribuídas: a equipa amarela tenta inserir o maior número possível de voltas para a esquerda e a equipa vermelha tenta inserir o maior número possível de voltas para a direita.',
        'questions' => [
            'content' =>
                [
                    1 => 'P1. Com a partida e a chegada organizadas como no primeiro jogo do vídeo, é possível que uma das duas equipas ganhe?',
                    2 => 'P2. Com a partida e a chegada organizadas como no jogo em que a Anna ganhou, poderia haver um empate?',
                    3 => 'P3. É possível organizar a partida e a chegada de forma a favorecer uma das duas equipas?',
                    4 => 'P4. Tendo em conta a disposição entre as posições de partida e de chegada, é possível prever qual será a distância entre a equipa vencedora e a perdedora?'
                ]

        ]

    ],


    'keep-off-my-path' => [
        'title' => 'Sai do meu caminho',
        'text' => '«Sai do meu caminho» é um jogo competitivo entre duas equipas. Partindo de extremos opostos do tabuleiro, as duas equipas constroem caminhos que criam entraves uma à outra. Ganha a equipa que conseguir impedir que a outra expanda o seu caminho.',
        'questions' => [
            'content' =>
                [
                    1 => 'P1. Existe algum ponto de partida que possa favorecer uma das duas equipas?',
                    2 => 'P2. Pode haver um empate?',
                    3 => 'P3. O jogador que avança primeiro está em vantagem?',
                    4 => 'P4. Existe uma estratégia de jogo inatacável que o primeiro jogador pode adotar para garantir que nunca perde?'
                ]

        ]

    ],

    'tug-of-war' => [
        'title' => 'Braço-de-ferro',
        'text' => '«Braço-de-ferro» é um jogo colaborativo e competitivo. A partir do centro inferior do tabuleiro, duas equipas (amarela e vermelha) trabalham em conjunto para chegar ao topo. A equipa amarela tenta chegar às caixas da esquerda, enquanto a equipa vermelha tenta chegar às caixas da direita.',
        'questions' => [
            'content' =>
                [
                    1 => 'P1. Existe uma estratégia que resulte sempre em vitória?',
                    2 => 'P2. O jogador que avança primeiro está em vantagem?',
                    3 => 'P3. Se os dois jogadores estiverem igualmente atentos, pode o jogo terminar sempre num empate, ou seja, no centro?',
                ]

        ]

    ],

    'explorer-without-footprints' => [
        'title' => 'Explorador sem pegadas',
        'text' => 'O explorador percorre o tabuleiro desde o ponto de partida até ao ponto de chegada, tentando passar por todas as casas. À medida que o explorador avança, vai deixando pegadas coloridas, que permitem ao robô seguir os seus passos ao interpretar as cores. O jogo torna-se ainda mais desafiante quando o explorador limpa as pegadas deixando apenas as cores.',
        'material' => 'bem como marcadores (ou lápis) em vermelho, amarelo e cinzento',
        'questions' => [
            'content' =>
                [
                    1 => 'P1. Qual é a diferença entre um tabuleiro repleto de pegadas coloridas e um com cores mas sem pegadas?',
                    2 => 'P2. Qual dos tabuleiros oferece mais liberdade de movimento, mantendo as mesmas regras de mudança de direção indicadas pela cor?',
                    3 => 'P3. Existem caminhos possíveis no tabuleiro com cores que não são possíveis no tabuleiro com pegadas coloridas?',
                    4 => 'P4. Existem caminhos possíveis no tabuleiro com pegadas coloridas que não são possíveis no tabuleiro que apenas tenha cores?'
                ]

        ]

    ],

    'walk-as-long-as-you-can' => [
        'title' => 'Caminha enquanto puderes',
        'text' => 'Nesta atividade, o desafio consiste em permanecer no tabuleiro o máximo de tempo possível utilizando cores em vez de pegadas. A atividade torna-se mais difícil à medida que a liberdade de movimentos aumenta',
        'coloured-cards' => "peças coloridas ou marcadores vermelhos, amarelos e cinzentos",
        'questions' => [
            'content' =>
                [
                    1 => 'P1. Em que circunstâncias é que os dois caminhos se cruzam e se bloqueiam mutuamente?',
                    2 => 'P2. Este jogo é apresentado como um jogo para dois jogadores. É possível jogá-lo a 3 ou 4 jogadores? É necessário alterar as regras?',
                ]

        ]

    ],

    'ada-charles-roby' => [
        'title' => 'Ada, Charles e Roby',
        'text' => 'A história de Ada Lovelace e Charles Babbage é interessante. Eles criaram e programaram computadores cem anos antes de estes terem sido inventados.',
        'material' => 'plasticina e um pequeno lápis',
        'questions' => [
            'content' =>
                [
                    1 => 'P1. Imagina que o robô que construíste com plasticina e um lápis pode mover-se através do tabuleiro para chegar a qualquer posição e, se necessário, traçar o seu caminho. Que instruções utilizarias para o programar?'
                ]

        ]

    ],

    'cody-and-roby' => [
        'title' => 'Cody e Roby',
        'text' => 'Este é um jogo de simulação com o programador, Cody, e o robô, Roby. O vídeo apresenta as cartas do CodyRoby, que utilizaremos a partir de agora para determinar os movimentos no tabuleiro. O Cody utilizará estas cartas para dar instruções ao Roby sobre a forma de se mover no tabuleiro.',
        'material' => 'tabuleiro quadriculado com legendas, cartas de instruções (esquerda, direita, em frente) e obstáculos a colocar no tabuleiro',
        'starter-kit' => 'kit de iniciação CodyRoby',
        'questions' => [
            'content' =>
                [
                    1 => 'P1. Onde chega o Roby se, a partir da posição C2 e virado para o Sul, executar a última sequência de instruções indicadas no vídeo?',
                    2 => 'P2. Os movimentos que o Roby faz ao seguir a última sequência de instruções apresentada no vídeo poderiam ser descritos aplicando as instruções do CodyFeet ou do CodyColor ao tabuleiro?',
                    3 => 'P3. Os três tipos de instruções introduzidas no vídeo, representados pelas cartas verdes, vermelhas e amarelas, constituem um conjunto de instruções capaz de conduzir o Roby até qualquer ponto do tabuleiro. Consegues pensar numa forma de fazer o mesmo com um conjunto de menos de 3 instruções?',
                ]

        ]

    ],

    'the-tourist' => [
        'title' => 'O/A turista',
        'text' => 'Duas equipas utilizam as cartas CodyRoby para formar o mais rapidamente possível a sequência de instruções que guiarão a turista através do tabuleiro até ao monumento que ela pretende visitar.',
        'material' => 'Pode ser útil utilizar cartas maiores para jogar no chão',
        'questions' => [
            'content' =>
                [
                    1 => 'P1. Que sequência de instruções guiaria a turista até à estátua de Rafael no primeiro exemplo apresentado no vídeo?',
                    2 => 'P2. Que sequência de instruções guiaria a turista até às Torricini do Palácio Ducal no segundo exemplo apresentado no vídeo?',
                    3 => 'P3. Consegues pensar num exercício divertido para fazer cada vez que uma equipa escolhe uma carta para acrescentar ao programa? Inventa um inspirando-te na corrida de estafetas apresentada no vídeo',
                ]

        ]

    ],

    'material2' => [
        "chequered-with-labels" => "tabuleiro quadriculado com etiquetas",
        "cards" => "24  cartas «ir em frente», 8  cartas «virar à esquerda» e 8  cartas «virar à direita»",
        "larger-cards" => "é recomendável utilizar cartas maiores caso se jogue no chão",
        "video" => "No vídeo explica-se também como jogar sem o baralho de cartas",
        "pieces-of-paper" => "São também necessários 24  pedaços de papel, para colocar nas casas já visitadas",
        "card-alternative" => "Como alternativa ao baralho de cartas CodyRoby, é possível utilizar os ícones das cartas disponíveis aqui",
        "small-drawings" => "É possível recorrer a pequenos desenhos para ajudar a contar a história. Encontram-se aqui os desenhos utilizados no vídeo",
        "rest-of-cards" => "Nas outras situações, utilizamos as cartas CodyRoby, CodyFeet ou CodyColour."
    ],


    'catch-the-robot' => [
        'title' => "Caça ao robô",
        'text' => "A caça ao robô é um jogo competitivo, que pode ser jogado em cima da mesa ou no chão. Vence o jogador que conseguir caçar o robô da equipa adversária, chegando à respetiva casa no tabuleiro. Como as cartas são tiradas à sorte, ambas as equipas têm constantemente de adaptar as suas estratégias.",
        'questions' => [
            'content' =>
                [
                    1 => "P1. Se o peão cor-de-rosa (Roby) estiver na casa central C3 voltado para norte e a equipa cor-de-rosa tiver 2 cartas «ir em frente», 2 cartas «virar à esquerda» e 1 carta «virar à direita», para que casas se pode o peão deslocar?",
                ]

        ]

    ],

    'the-snake' => [
        'title' => "A cobra",
        'text' => "A cobra é um jogo de paciência jogado com cartas CodyRoby. O objetivo do jogo é fazer passar a cobra por todas as casas do tabuleiro sem que morda a cauda.",
        'questions' => [
            'content' =>
                [
                    1 => "P1. Existem pontos de partida que tornem impossível passar por todas as casas sem morder a cauda da cobra?",
                ]

        ]

    ],

    'storytelling' => [
        'title' => "Contar histórias",
        'text' => "Hoje é dia de contar histórias! Utiliza as instruções do CodyRoby, as pegadas do CodyFeet ou as cores do CodyColour para guiares os peões no tabuleiro de modo a contar uma história. Espalha diferentes partes da história pelo tabuleiro.",
        'questions' => [
            'content' =>
                [
                    1 => "P1. Qual é a ferramenta mais versátil para ajudar o Roby a contar uma história?",
                    2 => "P2. Consegues colocar as partes da história que pretendes contar no tabuleiro em posições que tornem impossível obtê-las todas com o CodyFeet?",
                ]

        ]

    ],



    'texts' => [
        1 => 'A Coding@Home é uma coleção de vídeos curtos, materiais do tipo «faça-você-mesmo», quebra-cabeças, jogos e desafios de programação para o dia a dia em família bem como na escola. Não necessita de conhecimentos prévios nem de dispositivos eletrónicos para realizar as atividades. As atividades irão estimular o pensamento computacional e cultivar as competências dos alunos, dos pais e dos professores em casa ou na escola.',
        2 => 'A série Coding@Home da Semana Europeia da Programação tem por base a iniciativa <a href="https://www.raicultura.it/speciali/codinginfamiglia/" target="_blank">“Coding in famiglia”</a> da Universidade de Urbino e a CodeMOOCnet Association em cooperação com a Rai Cultura. Alessandro Bogliolo é professor de Sistemas de Processamento de Informação na Universidade de Urbino, <a href="/ambassadors?country_iso=IT" target="_blank">embaixador italiano da Semana Europeia da Programação</a>, coordenador de todos os embaixadores e membro do conselho de administração da Digital Skills and Jobs Coalition. ',
        3 => 'Se estiver interessado em mais atividades sem recurso a computadores ou em atividades em diferentes linguagens de programação, robótica, micro:bit, etc., consulte os <a href="/training">«Bits de Aprendizagem»</a> da Semana Europeia da Programação com vídeos didáticos e planos de aula para escolas do 1.º, 2.º e 3.º ciclo do ensino básico e do ensino secundário. Visite também a página de recursos da Semana Europeia da Programação para <a href="/resources/learn">alunos</a> e <a href="/resources/teach">professores.</a> '
    ]
];