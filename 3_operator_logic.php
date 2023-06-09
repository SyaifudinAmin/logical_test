<?php
function bagi(int $bilangan, int $pembagi)
{
    $hasil = 0;
    $sisa = $bilangan;
    while ($sisa >= $pembagi) {
        $sisa = $sisa - $pembagi;
        $newhasil = ++$hasil;
    }
    return $newhasil;
}

echo bagi(15, 1);
