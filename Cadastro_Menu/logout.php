

<?php
session_start();
echo $_SESSION["email"];
//apaga todas as sessions
session_destroy();
header ("location: index.php")
;

