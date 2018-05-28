<?php

class BubbleSort
{

    public function teste()
    {
        return [1,2,3,4,5,6,7,8];
    }

    public function sort($array)
    {
        $size = count($array);
        for($i=0; $i < $size - 1; $i++) {
            $trocado = false;
            for($j=0; $j < $size - $i - 1; $j++) {
                if($array[$j] > $array[$j+1]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j+1];
                    $array[$j+1] = $temp;
                    $trocado = true;
                }
            }
            if(!$trocado) break;
        }
        return $array;
    }
}