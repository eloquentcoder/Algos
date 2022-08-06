<?php


function findMedianSortedArrays($nums1, $nums2)
{
    // we want to only run binary search on one of the arrays. 
    // this will be the smallest array between the two arrays
    // We want to use A to save the smallest array we would
    // be doing the binary search on
    $A = $nums1; $B = $nums2;
    if (count($B) < count($A) ) {
        $A = $B; $B = $A;
    }        

    // next we will have to get the total count of
    // the arrays and then get the half of that count
    $total = count($nums1) + count($nums2);
    $half = intdiv($total, 2);

    // then we carry out the binary search on smaller array 
    $l = 0; $r = count($A) - 1;

    while (true) {
        
    }

}