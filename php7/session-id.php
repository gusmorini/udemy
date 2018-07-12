<?php

session_start();

/*
forçando criar uma nova sessão com session_regenerate_id();
*/

session_regenerate_id();

print_r($_SESSION);

// exemplos de funções para sessão
// http://php.net/manual/pt_BR/ref.session.php

// session_save_path — Obtém e/ou define o caminho para armazenamento da sessão atual

echo 'diretório temporário da sessão: '.session_save_path();

//session_status — Retorna o status atual da sessão

echo '<br> session status: '.session_status();