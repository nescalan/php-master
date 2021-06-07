<?php

// Nombres de constantes correctos
define("FOO",     "First Text");
define("FOO2",    "something else");
define("FOO_BAR", "something more");

// Nombres de constantes incorrectos
define("2FOO",    "something");

// Esto es válido, pero debe evitarse:
// PHP podría cualquier día proporcionar una constante mágica 
// que rompiera el script
define("__FOO__", "something"); 

echo FOO;