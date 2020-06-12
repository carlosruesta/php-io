<?php

/**
 * Adicionando um curso desde o teclado
 */

$novoCurso = trim(fgets(STDIN));

file_put_contents('cursos-php.txt', "\n$novoCurso", FILE_APPEND);

/**
 * Leitura desde ZIP file, fazendo uma copia direta por referncia no stream de saida que vai para tela
 */

$cursos = fopen('zip://arquivos.zip#cursos-php.txt', 'r');
stream_copy_to_stream($cursos, STDOUT);



