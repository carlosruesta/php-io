<?php

/**
 * Leitura desde HTTP
 */

echo file_get_contents('http://swapi.co/api/films/4/');

/**
 * Leitura desde ZIP file
 */

echo file_get_contents('zip://arquivos.zip#lista-cursos.txt');

/**
 * Uso do filtros na leitura do stream
 * Neste filtro o conteudo será convertido em maisculo
 */

$arquivoCursos = fopen('lista-cursos.txt', 'r');
stream_filter_append($arquivoCursos, 'string.toupper');
echo fread($arquivoCursos, filesize('lista-cursos.txt'));





