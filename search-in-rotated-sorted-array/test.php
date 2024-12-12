<?php

function search(array $nums, int $target) {
    $l = 0;
    $r = count($nums) - 1;

    while ($l <= $r) {
        $mid = intdiv($l + $r, 2);
        if ($nums[$mid] === $target) {
            return $mid;
        }

        if ($nums[$l] <= $nums[$mid]) {
            if (($nums[$l] <= $target) && ($target <= $nums[$mid])) {
                $r = $mid - 1;
            } else {
                $l = $mid + 1;
            }
        } else {
            if (($nums[$mid] <= $target) && ($target <= $nums[$r])) {
                $l = $mid + 1;
            } else {
                $r = $mid - 1;
            }
        }
    }

    return -1;
}


print(search([4,5,6,7,0,1,2], 0)); // 4
// print(search([4,5,6,7,0,1,2], 3)); // -1