<?php

function discriminant($a, $b, $c)
{
    $d = ($b * $b) - (4 * $a * $c);
    return $d;
}


assert(discriminant(5, 3, 7) === -131);
assert(discriminant(1, -8, 12) === 16);
assert(discriminant(1, -6, 9) === 0);
assert(discriminant(10, 13, 6) === -71);
assert(discriminant(3, 8, 15) === -116);
assert(discriminant(6, 7, 2) === 1);


function gender($name)
{
    $lastChar = substr($name, -2, 2);
    switch ($lastChar) {
        case 'а':
        case 'я':
            return 'пол - женский';
            break;
        case 'в':
        case 'г':
        case 'д':
        case 'й':
        case 'л':
        case 'м':
        case 'н':
        case 'п':
        case 'р':
        case 'с':
        case 'т':
        case 'ф':
        case 'х':
            return 'пол - мужской';
            break;
        default:
            return 'неизвестно';
    }
}

assert(gender('Виктория') == 'пол - женский');
assert(gender('Надежда') == 'пол - женский');
assert(gender('Валентина') == 'пол - женский');
assert(gender('Марья') == 'пол - женский');
assert(gender('Вячеслав') == 'пол - мужской');
assert(gender('Степан') == 'пол - мужской');
assert(gender('Артур') == 'пол - мужской');
assert(gender('Всеволод') == 'пол - мужской');
