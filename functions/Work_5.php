<?php

$someString = 'Ne ori na men9';

function upRegister(&$string) {
    return strtoupper($string);
}

print(upRegister($someString));