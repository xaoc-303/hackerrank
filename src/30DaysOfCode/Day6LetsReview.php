<?php
$stdin = fopen("php://stdin", "r");

/* Enter your code here. Read input from STDIN. Print output to STDOUT */

fscanf($stdin, "%d\n", $n);

for ($i = 0; $i < $n; $i++) {
    fscanf($stdin, "%[^\n]s", $s);

    for ($j = 0; $j < strlen($s); $j += 2) {
        printf("%s", $s[$j]);
    }

    echo " ";

    for ($j = 1; $j < strlen($s); $j += 2) {
        printf("%s", $s[$j]);
    }

    echo PHP_EOL;
}

fclose($stdin);
