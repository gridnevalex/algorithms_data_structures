<?php

function quickSort(array $input): array
{
    $lessThanPivot = $moreThanPivot = [];

    if (count($input) < 2) {
        return $input;
    }

    $pivotIndex = key($input);
    $pivot = array_shift($input);

    foreach ($input as $item) {
        if ($item <= $pivot) {
            $lessThanPivot[] = $item;
        } else {
            $moreThanPivot[] = $item;
        }
    }

    return array_merge(quickSort($lessThanPivot), [$pivotIndex => $pivot], quickSort($moreThanPivot));
}

var_dump(quickSort([-1,7,2,9,-1,11,0,-9]));