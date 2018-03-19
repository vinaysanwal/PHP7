<?
//This is strict mode:
declare (strict_types=1);
function sum(int ...$ints){
  return array_sum($ints);
}
//this code will not work print(sum(2,'3',4.1))
print(sum(2,3,4));
?>
