<?php

// Complete the factorial function below.
function factorial($n) {
    return $n == 1 ? 1 : $n * factorial($n - 1);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$result = factorial($n);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
