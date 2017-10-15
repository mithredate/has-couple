<?php

namespace Mithredate\DP;

class Test
{
    public function hasCouple(array $set, int $sum)
    {
        $min = min($set);

        $nonNegativeSet = array_map(function($val) use ($min){
            return $val - $min;
        }, $set);

        $adjustedSum = $sum - 2 * $min;

        for ($i = 0; $i <= $adjustedSum; $i++) {
            if(($k1 = array_search($i, $nonNegativeSet)) !== false) {
                unset($nonNegativeSet[$k1]);
                if(($k2 = array_search($adjustedSum - $i, $nonNegativeSet)) !== false) {
                    return true;
                }
                $nonNegativeSet[] = $i;
            }
        }
        return false;
    }
}
