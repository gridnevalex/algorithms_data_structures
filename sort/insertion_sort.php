<?php

function insertionSort(array $input): array
{
    foreach ($input as $i => $value) {
        $j = $i - 1;

        while ($j >= 0 && $input[$j] > $value) {
            $input[$j + 1] = $input[$j];
            $j--;
        }

        $input[$j + 1] = $value;
    }

    return $input;
}

var_dump(insertionSort([-1,7,2,9,-1,11,0,-9]));