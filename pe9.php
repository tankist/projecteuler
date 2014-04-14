<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 15.04.14
 * Time: 0:58
 */

$squares = [];

for ($i = 1; $i <= 1000; $i++) {
    $squares[$i] = $i * $i;
}

/**
 * 500 - because of a + b + c = 1000, so if a > 500, then even with b = 1 -> c > 500 (because of a^2+b^2=c^2)
 */

for ($a = 1; $a < 500; $a++) {
    for ($b = $a; $b < 500; $b++) {
        $ab = $a * $b / 1000;
        if ($ab == floor($ab)) {
            $c = 500 - $ab;
            if ($c > $a && $c > $b && $squares[$a] + $squares[$b] == $squares[$c]) {
                printf("%d, %d = %d | %d\n", $a, $b, $c, array_product([$a, $b, $c]));
            }
        }
    }
}