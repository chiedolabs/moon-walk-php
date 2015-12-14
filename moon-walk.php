<?php
function moonWalk($x, $leadingSpaces = 0) {
  //Make sure we don't start or endwith new lines
  $x = trim($x, "\r");
  $x = trim($x, "\n");

  // Find how many leading spaces are in the first line
  $spacesToRemove = strlen($x) - strlen(ltrim($x)) - $leadingSpaces;
  // Break up by new lines
  $lines = explode("\n", $x);
  //$lines = array_values(array_filter($lines,"not_empty"));
  
  // Remove that many leading spaces from the beginning of each string
  for($x = 0; $x < sizeof($lines); $x++) {
    // Remove each space
    $lines[$x] = preg_replace('/\s/', "", $lines[$x], $spacesToRemove);
  }
  // Put back into string on seperate lines
  return implode("\n", $lines);
}
?>
