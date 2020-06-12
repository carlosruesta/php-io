<?php

/**
 * Abrindo arquivo
 * Adicionando os primeiros 21 caraters do texto no inicio do arquivo
 * O parametro 'w' sempre coloca o cursor na primeira posição do arquivo
 * Fechando o arquivo
 */

$arquivo = fopen('cursos-php.txt', 'w');
$curso = 'Design Patterns PHP I: Boas práticas de programação';
fwrite($arquivo, $curso, 21);
fclose($arquivo);

/**
 * uso de file_put_contents
 * substitue o conteudo do arquivo completo
 */

$curso = "Design Patterns PHP I: Boas práticas de programação";
file_put_contents('cursos-php.txt', $curso);

/**
 * Uso do file_put_contents para adicionar conteudo ao arquivo
 * uso de flags: FILE_APPEND, FILE_TEXT... etc
 */

$curso = "Design Patterns PHP II: Boas práticas de programação";
file_put_contents('cursos-php.txt', $curso, FILE_APPEND);
