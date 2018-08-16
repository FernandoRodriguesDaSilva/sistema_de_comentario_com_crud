<?php

$utf8 = header("content-Type: text/html; charset=utf-8");

$conecta = new mysqli("localhost","root","root","db_comentario");

$conecta->set_charset('utf8');

?>