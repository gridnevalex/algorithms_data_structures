<?php

function bubbleSort(array $input): array
{
    do {
        $swapped = false;

        for ($i = 0; $i < array_key_last($input); $i++) {
            if ($input[$i] > $input[$i + 1]) {
                [$input[$i], $input[$i + 1]] = [$input[$i + 1], $input[$i]];

                $swapped = true;
            }
        }

    } while ($swapped);

    return $input;
}

var_dump(bubbleSort([-1,7,2,9,11,0,-9]));