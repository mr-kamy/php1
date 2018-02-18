<?php


function calc($a, $b, $op)
{
    switch ($op) {
        case '+':
            $x = $a + $b;
            break;
        case '-':
            $x = $a - $b;
            break;
        case '*':
            $x = $a * $b;
            break;
        case '/':
            $x = $a / $b;
            break;
    }
    return $x;
}

assert(calc(5, 3, '+') == 8);
assert(calc(5654545, 8878754, '+') == 14533299);
assert(round(calc(3.859, 16.856, '+'), 3) == round(20.715, 3));
assert(round(calc(4.982, 10.248896, '+'), 6) == round(15.230896, 6));
assert(calc(10, 5, '-') == 5);
assert(calc(68, 73, '-') == -5);
assert(round(calc(3.515, 1.2, '-'), 3) == round(2.315, 3));
assert(round(calc(8.6, 5, '-'), 1) == round(3.6, 1));
assert(calc(6, 8, '*') == 48);
assert(calc(50, 0, '*') == 0);
assert(calc(95, -5, '*') == -475);
assert(calc(68, 4, '/') == 17);
assert(calc(32, -2, '/') == -16);
assert(round(calc(23.8, 2, '/'), 1) == round(11.9, 1));
