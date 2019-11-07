<?php

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);
fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

for ($i = $n - 1; $i > -1; $i--) {
    printf("%d ", $arr[$i]);
}

fclose($stdin);
