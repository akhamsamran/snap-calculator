<?php
/**
 * Created by PhpStorm.
 * User: anna
 * Date: 1/29/2018
 * Time: 8:09 AM
 */



$x = 0;
$y = 0;
$calculateTypes = '';
$result = 0;

function calculator($x, $y, $result) : int{
	if ($result = $x + $y){
		return $x + $y;
	} elseif($result = $x * $y) {
		return $x - $y;
	}elseif($result = $x * $y){
		return $x * $y;
	}else($result = $x / $y){
		return $x / $y;
	}
}
return $result




/*actual answer below*/
function add(float $first, float $second) : float {
	return($first + $second);
}
function divide(float $dividend, float$divisor) : float{
	return($dividend / $divisor);
}
function multiply(float $first, float $second) : float{
	return($first * $second);
}
function subtract(float $minuend, float $subtrahend) : float{
	return($minuend - $subtrahend);
}
function main(float$first, float $second) : void{
	echo"Addition :".add($first, $second) . PHP_EOL;
	echo"Division :".divide($first, $second).PHP_EOL;
	echo"Multiplication:".multiply($first,$second).PHP_EOL;
	echo"Division:".divide($first, $second).PHP_EOL;
}
main(42,5);





?>