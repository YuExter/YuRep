<?php

/**
 * Created by PhpStorm.
 * User: Юля
 * Date: 27.06.2016
 * Time: 20:44
 */
class Chairs
{
    public function getMaxProfit(array $offers, array $demands) {
        $checkarr1 = false;
        foreach ($offers as $key => $somevar)
        {
            if (is_int($offers[$key])){
               $checkarr1 = true;
                break;
            }
        }
        if ($checkarr1 == false)
        {
            foreach ($demands as $key1 => $vars) {
                if (is_int($demands[$key1])) {
                    $checkarr1 = true;
                    break;
                }
            }
        }
        if ($checkarr1 == false){
            asort($offers);
            arsort($demands);
            $i = 0;
            $maxprof = 0;
            while ($offers[$i]<$demands[$i])
            {
                $maxprof = $maxprof + ($demands[$i] - $offers[$i]);
                $i++;
            }
            return($maxprof);
        }
        else
        {
            return(echo "Wrong Data");
        }

    }

}