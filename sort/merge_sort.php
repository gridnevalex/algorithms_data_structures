<?php

function mergeSort(array $input): array
{
    if (count($input) === 1) {
        return $input;
    }

    $middle = count($input) / 2;
    $left = array_slice($input, 0, $middle);
    $right = array_slice($input, $middle);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge(array $left, array $right): array
{
    $result = [];

    while (!empty($left) && !empty($right)) {
        if ($left[0] > $right[0]) {
            $result[] = $right[0];
            $right = array_slice($right, 1);
        } else {
            $result[] = $left[0];
            $left = array_slice($left, 1);
        }
    }

    while (!empty($left)) {
        $result[] = $left[0];
        $left = array_slice($left, 1);
    }

    while (!empty($right)) {
        $result[] = $right[0];
        $right = array_slice($right, 1);
    }

    return $result;
}

var_dump(mergeSort([-1,7,2,9,-1,11,0,-9]));