<?php

function search(array $input, int $value): int
{
    foreach ($input as $key => $item) {
        if ($value === $item) {
            return $key;
        }
    }

    return -1;
}

var_dump(search([-1,0,3,5,7,9,12], 12));