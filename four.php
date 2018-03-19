<?php
//Invalid retrun type
declare(strict_types = 1);
function returnIntValue(int $value) :int {
  return $value + 1.0 ; //This is not allowed
}
print(returnIntValue(5));
?>
