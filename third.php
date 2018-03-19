<?php
//Valid return type
declare (strict_types = 1);
function returnIntValue(int $value) :int {
  return $value;
}
print (returnIntValue(5));
?>
