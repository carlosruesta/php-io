<?php

/**
 * Abrindo arquivo
 * Lendo linha a linha
 * Fechando o arquivo
 */

$arquivo = fopen('lista-cursos.txt', 'r');
while (!feof($arquivo)) {
    $curso = fgets($arquivo);

    echo $curso . PHP_EOL;
}
fclose($arquivo);

/**
 * abrindo o arquivo
 * lendo o arquivo arquivo completo usando o tamanho do arquivo
 * fechando o arquivo
 */

$arquivo = fopen('lista-cursos.txt', 'r');
$tamanhoDoArquivo = filesize('lista-cursos.txt');
$cursos = fread($arquivo, $tamanhoDoArquivo);
echo $cursos;
fclose($arquivo);

/**
 * Uso do file_get_contents para ler o arquivo completo
 * file_get_contents devolve o arquivo como um string
 */

$cursos = file_get_contents('lista-cursos.txt');
echo $cursos;

/**
 * Uso do file para leitura do arquivo completo
 * file() lê o arquivo e o coloca num array onde cada linha é um item do array
 */
$cursos = file('lista-cursos.txt');
var_dump($cursos);

