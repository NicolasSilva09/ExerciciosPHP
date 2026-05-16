<?php
$produtos = ['limpeza','higiene','bazar','limpeza','açougue','bazar'];

$semDuplicatas = array_unique($produtos);

echo implode(" - ", $semDuplicatas);
?>