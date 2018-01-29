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




?>