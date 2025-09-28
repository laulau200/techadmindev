<?php
function suppr_espaces($chaine) {
    $chaine = preg_replace('/\s+/','',$chaine);
    $chaine = trim($chaine);
    return $chaine;
}


?>