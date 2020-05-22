<?php

    $array_a = [
        1,
        2,
        3,
        4,
        5
    ];
    
    $array_b = [
        1,
        3,
        5,
        7,
        9
    ];

    public function chekSameNumber($array_a = array(), $array_b = array())
    {
        $new_of_array = [];
        foreach ($array_a as $value_a) {
            foreach ($array_b as $value_b) {
                if ($value_a == $value_b) {
                    $new_of_array[] = $value_a;
                }
            }
        }

        return $new_of_array;
    }
