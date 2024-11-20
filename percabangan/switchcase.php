<?php

$lampu = "merah";

switch ($lampu) {
    case 'merah':
        echo "berhenti";
        break;
    case 'kuning':
        echo "bersiap";
        break;
    case 'hijau':
        echo "maju";
        break;
    default:
        echo "lampu tidak ada";
        break;
}

echo "<br>";


$suka = true;
echo $suka ? "aku juga suka" : "ngga";

?>