<?php
session_start();

//Limpar os caches
session_unset();

//Encerra a session
session_destroy();

//Redireciona para outra página
header("location: index.php");