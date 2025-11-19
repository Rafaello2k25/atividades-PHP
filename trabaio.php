<?php 
echo "\033c";
$opcao = lobby();

if ($opcao == 1) {
    megaSena();
}elseif ($opcao == 2) {
    quina();
}elseif ($opcao == 3) {
    lotofacil();
}else{
    lotomania();
}

do {
    $a = readline("\nDeseja jogar novamente? (1-Sim / 2-Não): ");
    if ($a == 1) {
        echo "\033c";
        $opcao = lobby();

        if ($opcao == 1) {
            megaSena();
        }elseif ($opcao == 2) {
            quina();
        }elseif ($opcao == 3) {
            lotofacil();
        }else{
            lotomania();
        }
    } elseif ($a == 2) {
        echo "\033c";
        print "Obrigado por jogar! Volte sempre!\n";
        break;
    } else {
        echo "\033c";
        print "Opção inválida! Tente novamente.\n";
    }
} while ($a <= 2 && $a >= 1);



function lobby() {

    print "===========================\n";
    print "       MENU DE JOGOS       \n";
    print "===========================\n";
    print "[1] Mega-Sena     (1 a 60)   → Escolha de 6 a 20 números\n";
    print "[2] Quina         (1 a 80)   → Escolha de 5 a 15 números\n";
    print "[3] Lotofácil     (1 a 25)   → Escolha de 15 a 20 números\n";
    print "[4] Lotomania     (0 a 99)   → Jogo fixo com 50 números\n";
    print "===========================\n";

    $jogos = [
        1 => "Mega-Sena",
        2 => "Quina",
        3 => "Lotofácil",
        4 => "Lotomania",
        
    ];

    $opcao = trim( readline("Escolha um jogo (1-4): "));
    return $opcao;
    print "Você escolheu: " . $jogos[$opcao] . "\n";


}

function megaSena(){

    echo "\033c";

    print "===========================\n";
    print "         MEGA-SENA         \n";
    print "===========================\n";

    $quantidadeDezenas = readline("Quantas dezenas você quer jogar (6 a 20)? \n");
    echo "\033c";

    if ($quantidadeDezenas < 6 || $quantidadeDezenas > 20) {
        return megaSena();
    }else{
        $quantidadejogos = readline("Quantos jogos deseja apostar?: ");
        $jogos = 1;

        $dezenas = [];

        
        for ($i=0; $i < $quantidadejogos ; $i++) { 
            for ($o=0; $o < $quantidadeDezenas ; $o++) { 
            do {
                $num = random_int(1,60);
            }while (in_array($num, $dezenas));
                $dezenas[] = $num;
                sort($dezenas);
        }
           print "\n" . $jogos . "º jogo \n";
        foreach ($dezenas as $d) {
            print " - " . $d . " - ";
            
        }
        $dezenas = []; 
        }
        
    }
    print "\nObrigado por jogar na Mega-Sena!\n";
    $valores = [
        6 => 6.00,
        7 => 42.00,
        8 => 168.00,
        9 => 504.00,
        10 => 1260.00,
        11 => 2772.00,
        12 => 5544.00,
        13 => 10296.00,
        14 => 18018.00,
        15 => 30030.00,
        16 => 48048.00,
        17 => 74256.00,
        18 => 111384.00,
        19 => 162792.00,
        20 => 232560.00
    ];
    print "Será gasto R$" . $valores [$quantidadeDezenas] . "\n";
}

function quina(){

    echo "\033c";

    print "===========================\n";
    print "           QUINA           \n";
    print "===========================\n";

    $quantidadeDezenas = readline("Quantas dezenas você quer jogar (5 a 15)? \n");
    echo "\033c";
 
    if ($quantidadeDezenas < 5 || $quantidadeDezenas > 15) {
        return quina();
    }else{

        $dezenas = [];

        for ($i=0; $i < $quantidadeDezenas ; $i++) { 
            do {
                $num = random_int(1,80);
            }while (in_array($num, $dezenas));
                $dezenas[] = $num;
                sort($dezenas);
        }
        foreach ($dezenas as $d) {
            print " - " . $d . " - ";
        }
    }
    print "\nObrigado por jogar na Quina!\n";

}

function lotofacil(){

    echo "\033c";

    print "===========================\n";
    print "         LOTOFÁCIL         \n";
    print "===========================\n";

    $quantidadeDezenas = readline("Quantas dezenas você quer jogar (15 a 20)? \n");
    echo "\033c";

 
    if ($quantidadeDezenas < 15 || $quantidadeDezenas > 20) {
        return lotofacil();
    }else{

        $dezenas = [];

        for ($i=0; $i < $quantidadeDezenas ; $i++) { 
            do {
                $num = random_int(1,25);
            }while (in_array($num, $dezenas));
                $dezenas[] = $num;
                sort($dezenas);
        }
        foreach ($dezenas as $d) {
            print " - " . $d . " - ";
        }
    }
    print "\nObrigado por jogar na LotoFácil!\n";
}

function lotomania(){

    echo "\033c";

    print "===========================\n";
    print "         LOTOMANIA         \n";
    print "===========================\n";

    print "Jogo fixo com 50 números\n";
    $quantidadeDezenas = 50;
    echo "\033c";

 
    if ($quantidadeDezenas < 50 || $quantidadeDezenas > 50) {
        return lotomania();
    }else{
$dezenas = [];

        for ($i=0; $i < $quantidadeDezenas ; $i++) {
             do {
                $num = random_int(0,99);
            }while (in_array($num, $dezenas));
                $dezenas[] = $num;
                sort($dezenas);
        }
        foreach ($dezenas as $d) {
            print " - " . $d . " - ";
        }
    }
    print "\nObrigado por jogar na Lotomania!\n";
}
