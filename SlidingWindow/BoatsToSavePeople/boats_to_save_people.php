<?php


function boatsToSavePeople(array $people, int $limit): int {
    // sort the people array to get array of people in ascending order. 
    //This will allow for our sliding window to compare the largest and smallest weight
    // and see if we can add both of them inside the boat
    sort($people);
    
    // initialize a boats variable to store the number of boats we can use
    $boats = 0;

    // initialize our left and right pointers to the first and last elements in our array.
    // This will depict the lightest and heaviest person at any given time
    $l = 0;
    $r = count($people) - 1;

    // perform your loop
    while ($l <= $r) {
        // if the weight of the first and last persons is less than or equal to the limit, it means
        // we can add both of them into the boat. We then decrease the pointers and check the other
        // persons in the boat. If not just add the heaviest person by decreasing the right pointer
        if ($people[$l] + $people[$r] <= $limit) {
            $l++;
            $r--;
        } else {
            $r--;
        }
        // We send the boat off by increasing the boat count
        $boats++;
    }
    // At the end we return the boats.
    return $boats;
}

print(boatsToSavePeople([3,5,3,4], 5));