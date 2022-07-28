<?php


function reorganizeString(String $s)
{
    $counts = [];
    for ($i = 0; $i < strlen($s); $i++) {
        !array_key_exists($s[$i], $counts) ? $counts[$s[$i]] = 1 : $counts[$s[$i]]++;
    }


    $maxHeap =  new \SplMaxHeap();
    foreach ($counts as $key => $value) {
        $maxHeap->insert([$value, $key]);
    }




    $result = "";

    while ($maxHeap->count() > 1) {
        [$currentCount, $currentChar] = $maxHeap->extract();
        [$nextCount, $nextChar] = $maxHeap->extract();
        $result .= $currentChar;
        $result .= $nextChar;

        if ($currentCount > 1) {
            $maxHeap->insert([$currentCount - 1, $currentChar]);
        }
        if ($nextCount > 1) {
            $maxHeap->insert([$nextCount - 1, $nextChar]);
        }
    }


    if (!$maxHeap->isEmpty()) {
        [$lastCount, $lastChar] = $maxHeap->extract();

        if ($lastCount > 1) {
            return "";
        }
        $result .= $lastChar;
    }



    return $result;
}


print_r(reorganizeString("abbccc"));
