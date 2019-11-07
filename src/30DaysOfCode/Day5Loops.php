<?php

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

for ($i = 1; $i < 11; $i++) {
    printf("%d x %d = %d\n", $n, $i, $n * $i);
}

fclose($stdin);
