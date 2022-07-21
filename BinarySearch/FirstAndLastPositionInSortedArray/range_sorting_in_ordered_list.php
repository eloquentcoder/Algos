<?php


function rangeSortingInOrderedList(array $nums, int $target)
{

    $left = binSearch($nums, $target, true);
    $right = binSearch($nums, $target, false);

    return [$left, $right];
}

function binSearch($nums, $target, $leftBias)
{
    $l = 0;
    $r = count($nums) - 1;

    $res = -1;

    while ($l <= $r) {
        $m = intdiv($l + $r, 2);
        if ($target < $nums[$m]) {
            $r = $m - 1;
        } else if ($target > $nums[$m]) {
            $l = $m + 1;
        } else {
            $res = $m;
            if ($leftBias) {
                $r = $m - 1;
            } else {
                $l = $m + 1;
            }
        }
    }
    return $res;
}


print_r(rangeSortingInOrderedList([1, 1, 2, 4, 4], 1));
