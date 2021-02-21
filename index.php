<?php

function sortNumbers()
{
    $sorted = [];

    while (count($sorted) <= 5) {
        $num = rand(1, 60);

        if (!in_array($num, $sorted)) {
            $sorted[] = $num;
        }
    }

    return $sorted;
}

function compare(array $gameArr, array $sortedArr) 
{
    //$diffs = array_diff($gameArr, $sortedArr);
    $diffs = [];
    foreach ($gameArr as $game) {
        if (in_array($game, $sortedArr)) {
            $diffs[] = $game;
        }
    }

    //printMessage("Diferenças");
    printMessage("Acertos");
    printArray($diffs);

    //$asserts = 6 - count($diffs);
    $asserts = count($diffs);

    return $asserts;
}

function printArray(array $arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

function printMessage(string $text)
{
    echo $text;
    echo PHP_EOL;
}

$game = [
    45,
    6,
    34,
    19,
    10,
    23
];

printMessage("Jogo");
printArray($game);

$sorted = sortNumbers();

printMessage("Resultado/Sorteio");
printArray($sorted);

printMessage("Você acertou " . compare($game, $sorted) . " número(s)");
