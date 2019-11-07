<?php

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

echo ($n % 2 == 1 || ($n > 5 && $n < 21)) ? "Weird" : "Not Weird";

fclose($stdin);
