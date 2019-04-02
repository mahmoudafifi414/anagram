<?php
function isAnagram($val1, $val2)
{
    if (strlen($val1) != strlen($val2)) {
        return false;
    }
    if (count_chars($val1, 1) == count_chars($val2, 1)) {
        return true;
    }
    return false;
}

function isAnagram2($val1, $val2)
{
    if (strlen($val1) != strlen($val2)) {
        return false;
    }
    $string1 = str_split($val1);
    sort($string1);
    $string2 = str_split($val2);
    sort($string2);
    if (implode('', $string1) === implode('', $string2)) {
        return true;
    }
    return false;
}

//check first function
print_r(isAnagram('mahmoud', 'ahmoudm'));

//check second function
print_r(isAnagram2('mahmoud', 'ahmoudm'));