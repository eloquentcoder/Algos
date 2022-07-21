<?php


function rangeSortingInOrderedList(array $nums, int $target)
{
    // to get the left most and right most index of target, we create a helper function
    // and add an extra argument depicting left bias or right bias
    $left = binSearch($nums, $target, true);
    $right = binSearch($nums, $target, false);

    return [$left, $right];
}

function binSearch($nums, $target, $leftBias)
{

    // initialize the left and right pointers to the first and last element in the nums array
    $l = 0;
    $r = count($nums) - 1;

    // initialize a result variable
    $res = -1;

    // while the left and right pointers have not crossed,
    while ($l <= $r) {
        // calculate the middle index of the array
        $m = intdiv($l + $r, 2);
        // if target is less than the number at the middle index, set the right pointer to m - 1;
        if ($target < $nums[$m]) {
            $r = $m - 1;
        // if target is greater than the number at the middle index, set the left pointer to m + 1;
        } else if ($target > $nums[$m]) {
            $l = $m + 1;
        } else {
            // if we have found the target, set the result to m and compute our left and right biases as the case my be
            // so the loop continues to check if we have left and right bias
            $res = $m;
            if ($leftBias) {
                $r = $m - 1;
            } else {
                $l = $m + 1;
            }
        }
    }
    // return the result
    return $res;
}


print_r(rangeSortingInOrderedList([1, 1, 2, 4, 4], 1));
