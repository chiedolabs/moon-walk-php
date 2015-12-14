<?php
function moonWalk($x, $leadingSpaces = 0) {
  // Break up by new lines
  $lines = explode("\n", $x);
  // Find how many leading spaces are in the first line
  $spacesToRemove = strlen($lines[0]) - strlen(ltrim($lines[0])) - $leadingSpaces;

  // Remove that many leading spaces from the beginning of each string
  for($x = 0; $x < sizeof($lines); $x++) {
    // Remove each space
    $lines[$x] = preg_replace('/\s/', "", $lines[$x], $spacesToRemove);
  }
  // Put back into string on seperate lines
  $x = implode("\r\n", $lines);

  return $x;
}
?>
