<?php
include 'MyList.php';
$newArr = new MyList();
$newArr->add(1);
$newArr->add(2);
$newArr->add(3);
$newArr->add(4);
echo ' số phần tử trong mảng: ' . $newArr->size() . '<br>';
echo "<br>";
$newArr->remove(2);
print_r($newArr);