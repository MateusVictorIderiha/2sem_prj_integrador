<?php

/**
 * 
 * 
 * @return array
 */
function dancatopicos(): array {
    $dancas = getDadosJson("dados/dancas.json");
    return $dancas;
}