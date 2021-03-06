--TEST--
Test sprintf() function : usage variations - char formats with boolean values
--FILE--
<?php
/* Prototype  : string sprintf(string $format [, mixed $arg1 [, mixed ...]])
 * Description: Return a formatted string
 * Source code: ext/standard/formatted_print.c
*/

echo "*** Testing sprintf() : char formats with boolean values ***\n";

// array of boolean values
$boolean_values = array(
  true,
  false,
  TRUE,
  FALSE,
);

// array of char formats
$char_formats = array(
  "%c", "%hc", "%lc",
  "%Lc", " %c", "%c ",
  "\t%c", "\n%c", "%4c",
  "%30c", "%[a-bA-B@#$&]", "%*c"
);

$count = 1;
foreach($boolean_values as $boolean_value) {
  echo "\n-- Iteration $count --\n";

  foreach($char_formats as $format) {
    var_dump( sprintf($format, $boolean_value) );
  }
  $count++;
};

echo "Done";
?>
--EXPECTF--
*** Testing sprintf() : char formats with boolean values ***

-- Iteration 1 --
string(1) ""
string(1) "c"
string(1) ""
string(1) "c"
string(2) " "
string(2) " "
string(2) "	"
string(2) "
"
string(1) ""
string(1) ""
string(11) "a-bA-B@#$&]"
string(1) "c"

-- Iteration 2 --
string(1) " "
string(1) "c"
string(1) " "
string(1) "c"
string(2) "  "
string(2) "  "
string(2) "	 "
string(2) "
 "
string(1) " "
string(1) " "
string(11) "a-bA-B@#$&]"
string(1) "c"

-- Iteration 3 --
string(1) ""
string(1) "c"
string(1) ""
string(1) "c"
string(2) " "
string(2) " "
string(2) "	"
string(2) "
"
string(1) ""
string(1) ""
string(11) "a-bA-B@#$&]"
string(1) "c"

-- Iteration 4 --
string(1) " "
string(1) "c"
string(1) " "
string(1) "c"
string(2) "  "
string(2) "  "
string(2) "	 "
string(2) "
 "
string(1) " "
string(1) " "
string(11) "a-bA-B@#$&]"
string(1) "c"
Done
