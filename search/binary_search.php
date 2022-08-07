<?php

function search(array $input, int $value): int
{
    $left = 0;
    $right = array_key_last($input);

    while ($left <= $right) {
        $middle = ($right - $left) / 2 + $left;

        if ($input[$middle] === $value) {
            return $middle;
        }

        if ($input[$middle] < $value) {
            $left = $middle + 1;
        }

        if ($input[$middle] > $value) {
            $right = $middle -1;
        }
    }

    return -1;
}

var_dump(search([-1,0,3,5,7,9,12], 3));