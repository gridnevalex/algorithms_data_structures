<?php

function selectionSort(array $input): array
{
    for ($i = 0; $i < array_key_last($input); $i++) {
        $min = $i;

        for ($j = $i + 1, $jMax = count($input); $j < $jMax; $j++) {
            if ($input[$j] < $input[$min]) {
                $min = $j;
            }
        }

        [$input[$i], $input[$min]] = [$input[$min], $input[$i]];
    }

    return $input;
}

var_dump(selectionSort([-1,7,2,9,11,0,-9]));