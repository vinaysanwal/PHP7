<?php
//Null coalescing Operator:
$username = $_GET['username'] ?? 'not passed';
print($username);
print("<br/>");

//code using ternary Operator
$username = isset($_GET['username']) ? $_GET['username'] : 'not passed';
print($username);
print("<br/>");

//chaining ?? operation
$username = $_GET['username']?? $_POST['username'] ?? 'not passed';
print($username);
?>
