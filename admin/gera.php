<?php

$cod = strtolower(substr(md5(microtime()), -6));

echo $cod;


?>