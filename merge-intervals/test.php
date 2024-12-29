<?php

/**
 * @param Integer[] $intervals
 * @return array
 */
function merge(array $intervals) {
    usort($intervals, function($a, $b) {
        return $a[0] < $b[0] ? -1 : 1;
    });
    $mergetIntervals = [$intervals[0]];

    $i = 0;
    $cnt = count($intervals);
    while ($i < $cnt) {
        $j = $i + 1;
        while ($j < $cnt) {
            $lastEl = count($mergetIntervals) - 1;
            if ($intervals[$j][0] <= $mergetIntervals[$lastEl][1] && $mergetIntervals[$lastEl][1] <= $intervals[$j][1]) {
                $mergetIntervals[$lastEl][1] = $intervals[$j][1];
                $i = $j;
            } elseif ($mergetIntervals[$lastEl][1] < $intervals[$j][0]) {
                $mergetIntervals[] = $intervals[$j];
            }

            $j = $j + 1;
        }

        $i = $i + 1;
    }

    return $mergetIntervals;
}
// $intervals = [[1,3], [2,6], [5,6], [8,10], [10,11]];
$intervals = [[1,3],[2,6],[8,10],[15,18]];
// $intervals = [[1,4],[0,4]];
// $intervals = [[1,3],[2,6],[8,10],[15,18],[0,19]];
print_r($intervals);
print_r(merge($intervals));

