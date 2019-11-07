<?php

$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";

// Declare second integer, double, and String variables.
settype($ii, "integer");
settype($dd, "float");
settype($ss, "string");

// Read and save an integer, double, and String to your variables.
fscanf($handle, "%d\n", $ii);
fscanf($handle, "%lf\n", $dd);
fscanf($handle, "%[^\n]s", $ss);

// Print the sum of both integer variables on a new line.
printf("%d\n", $i + $ii);

// Print the sum of the double variables on a new line.
printf("%.1lf\n", $d + $dd);

// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
printf("%s", $s . $ss);

fclose($handle);
