<?php

/**
 * Abrindo 2 arquivos de texto e transferindo conteudo para um arquivo CSV
 */

$meusCursos = file('lista-cursos.txt');
$outrosCursos = file('cursos-php.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [trim($curso), 'Sim'];

    fputcsv($arquivoCsv, $linha, ';');
}

foreach ($outrosCursos as $curso) {
    $linha = [trim($curso), 'Não'];

    fputcsv($arquivoCsv, $linha, ';');
}

fclose($arquivoCsv);

/**
 * Lendo conteudo do diretorrioo atual
 */

$diretorioAtual = dir('.');

echo $diretorioAtual->path . PHP_EOL;

while ($arquivo = $diretorioAtual->read()) {
    echo $arquivo . PHP_EOL;
}

/**
 * lendo arquivo como objeto SplFileObject
 */

$arquivoCursos = new SplFileObject('cursos.csv');

while (!$arquivoCursos->eof()) {
    $linha = $arquivoCursos->fgetcsv(';');

    echo $linha[0] . PHP_EOL;
}

$date = new DateTime();
$date->setTimestamp($arquivoCursos->getCTime());

echo $date->format('d/m/Y') . PHP_EOL;



/**
 * lendo arquivo como objeto SplFileObject e tratando como collection
 */

// $arquivoCursos = new SplFileObject('lista-cursos.txt');
$arquivoCursos = new SplFileObject('cursos.csv');

foreach ($arquivoCursos as $linha) {
    var_dump($linha);
}

