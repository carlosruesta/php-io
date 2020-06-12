<?php

/**
 * Acessar uma API via stream definindo os metodos, headers e outros parametros da request
 * Sera utilizado os contexto de cada wrapper ou pelo protocolo
 */

$contexto = stream_context_create([
  'http' => [
      'method' => 'POST',
      'header' => [
          "X-From: PHP",
          "Content-Type: text/plain",
      ],
      'content' => 'Teste de corpo do request'
  ]
]);
echo file_get_contents('http://httpbin.org/post', false, $contexto);

/**
 * Testando contexto HTTP com metodo DELETE
 */

$contexto = stream_context_create([
   'http' => [
       'method' => 'DELETE',
       'header' => [
           "X-From: PHP",
           "Content-Type: text/plain",
       ]
   ]
]);
echo file_get_contents('http://httpbin.org/delete', false, $contexto);

/**
 * Para abrir um arquivo ZIP com senha
 */

$contexto = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
]);

echo file_get_contents(
    'zip://arquivos_com_senha.zip#lista-cursos.txt',
    false,
    $contexto
);



