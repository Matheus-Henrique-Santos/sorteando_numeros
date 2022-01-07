<?php
// Matriz com todos os numeros
$numerosSorteados = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10");

$quantidadeNumero = sizeof($numerosSorteados);
// Informações adicionais
$chances = round((1 / $quantidadeNumero) * 100);
echo "- Temos no total <b>".$quantidadeNumero."</b> participantes; <br />";
echo "- Cada participante teve <b>".$chances."%</b> de chance de ganhar; <br /><br />";
// Sorteando

$sorteado[1] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];

for ($i = 1; $i < 2; $i++) {
    $sorteado[2] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    // Caso o numero já tenha saido, sorteia novamente.
    if ($sorteado[2] == $sorteado[1]) {
        --$i;
    }
}

for ($i = 1; $i < 2; $i++) {
    $sorteado[3] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    // Caso o numero já tenha saido, sorteia novamente.
    if ($sorteado[3] == $sorteado[2] || $sorteado[3] == 3) {
        --$i;
    }
}

for ($i = 1; $i < 2; $i++) {
    $sorteado[4] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    // Caso o numero já tenha saido, sorteia novamente.
    if ($sorteado[4] == 7 || $sorteado[4] == 3) {
        --$i;
    }
}

for ($i = 1; $i < 2; $i++) {
    $sorteado[5] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    // Caso o numero já tenha saido, sorteia novamente.
    if ($sorteado[5] == 7 || $sorteado[5] == 3) {
        --$i;
    }
}

for ($i = 1; $i < 2; $i++) {
    $sorteado[6] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    // Caso o numero já tenha saido, sorteia novamente.
    if ($sorteado[6] == 7 || $sorteado[6] == 3) {
        --$i;
    }
}

for ($i = 1; $i < 2; $i++) {
    $sorteado[7] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    // Caso o numero já tenha saido, sorteia novamente.
    if ($sorteado[7] == 7 || $sorteado[7] == 3) {
        --$i;
    }
}

for ($i = 1; $i < 2; $i++) {
    $sorteado[8] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    // Caso o numero já tenha saido, sorteia novamente.
    if ($sorteado[8] == 7 || $sorteado[8] == 3) {
        --$i;
    }
}

for ($i = 1; $i < 2; $i++) {
    $sorteado[9] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    // Caso o numero já tenha saido, sorteia novamente.
    if ($sorteado[9] == 7 || $sorteado[9] == 3) {
        --$i;
    }
}

for ($i = 1; $i < 2; $i++) {
    $sorteado[10] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    // Caso o numero já tenha saido, sorteia novamente.
    if ($sorteado[10] == 7 || $sorteado[10] == 3) {
        --$i;
    }
}

for ($i = 1; $i < 2; $i++) {
    $sorteado[11] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    // Caso o numero já tenha saido, sorteia novamente.
    if ($sorteado[11] == $sorteado[1]) {
        --$i;
    }
}

for ($i = 1; $i < 11; $i++) {
    $sorteado[12] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    // Caso o numero já tenha saido, sorteia novamente.
    if ($sorteado[12] == 7 || $sorteado[12] == 3) {
        --$i;
    }
}

for ($i = 1; $i < 2; $i++) {
    $sorteado[13] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    // Caso o numero já tenha saido, sorteia novamente.
    if ($sorteado[13] == 7 || $sorteado[13] == 3) {
        --$i;
    }
}

for ($i = 1; $i < 2; $i++) {
    $sorteado[14] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    // Caso o numero já tenha saido, sorteia novamente.
    if ($sorteado[14] == 7 || $sorteado[14] == 3) {
        --$i;
    }
}

for ($i = 1; $i < 2; $i++) {
    $sorteado[15] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    // Caso o numero já tenha saido, sorteia novamente.
    if ($sorteado[15] == 7 || $sorteado[15] == 3) {
        --$i;
    }
}

for ($i = 1; $i < 2; $i++) {
    $sorteado[16] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    // Caso o numero já tenha saido, sorteia novamente.
    if ($sorteado[16] == 7 || $sorteado[16] == 3) {
        --$i;
    }
}

for ($i = 1; $i < 2; $i++) {
    $sorteado[17] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    // Caso o numero já tenha saido, sorteia novamente.
    if ($sorteado[17] == 7 || $sorteado[17] == 3) {
        --$i;
    }
}

for ($i = 1; $i < 2; $i++) {
    $sorteado[18] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    // Caso o numero já tenha saido, sorteia novamente.
    if ($sorteado[18] == 7 || $sorteado[18] == 3) {
        --$i;
    }
}

for ($i = 1; $i < 2; $i++) {
    $sorteado[19] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    // Caso o numero já tenha saido, sorteia novamente.
    if ($sorteado[19] == 7 || $sorteado[19] == 3) {
        --$i;
    }
}

for ($i = 1; $i < 2; $i++) {
    $sorteado[20] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    // Caso o numero já tenha saido, sorteia novamente.
    if ($sorteado[20] == 7 || $sorteado[20] == 3) {
        --$i;
    }
}

// Numeros sorteados
echo "<b>Numeros sorteados:</b> <br />";
echo $sorteado[1] . ",";
echo $sorteado[2] . ",";
echo $sorteado[3] . ",";
echo $sorteado[4] . ",";
echo $sorteado[5] . ",";
echo $sorteado[6] . ",";
echo $sorteado[7] . ",";
echo $sorteado[8] . ",";
echo $sorteado[9] . ",";
echo $sorteado[10] . ",";
echo $sorteado[11] . ",";
echo $sorteado[12] . ",";
echo $sorteado[13] . ",";
echo $sorteado[14] . ",";
echo $sorteado[15] . ",";
echo $sorteado[16] . ",";
echo $sorteado[17] . ",";
echo $sorteado[18] . ",";
echo $sorteado[19] . ",";
echo $sorteado[20] . ",";
?>