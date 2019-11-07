<?php

$stdin = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

fscanf($stdin, "%d\n", $n);

$phoneBook = [];
for ($i = 0; $i < $n; $i++) {
    list ($name, $phone) = fscanf($stdin, "%s %s\n");
    $phoneBook[$name] = intval($phone);
}

while ($name = fscanf($stdin, "%[^\n]s")) {
    list ($name) = $name;
    printf("%s\n", array_key_exists($name, $phoneBook) ? $name."=".$phoneBook[$name] : "Not found");
}

fclose($stdin);
