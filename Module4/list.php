<?php
$fruitS = array('apple','banana','orange');

$fruit1 = 'apple';
$fruit2 = 'banana';
$fruit3 = 'orange';

$fruits = ['apple','banana','orange']

echo $fruits['1']

echo "<br>";

$fruitS = array('apple','banana','orange');
print_r($fruits);
array_push($fruits, 'Watermelon');
print_r($fruits);
array_pop($fruits);
print_r($fruits);

echo "<br>";

array_unshift($fruits,'peach');
print_r($fruits);

echo "<br>";

array_shift($fruits)
print_r($fruits);

$hobbies =['footba','basketball','hcokey'];

$thefirstslice = array_slice($hobbies, 2);
$thesecondslice = array_slice($hobbies,0,3);

print_r($thefirstslice);
print_r($thesecondslice);


$mbledhja= array(11,11,11,11)
print_r(array_sum($mbledhja))


?>