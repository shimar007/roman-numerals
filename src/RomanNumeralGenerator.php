<?php

namespace Larowlan\RomanNumeral;

/**
 * Defines a class for generating roman numerals from integers.
 */
class RomanNumeralGenerator {
	
   /**
   * Generates a roman numeral from an integer.
   *
   * @param int $number
   *   Integer to convert.
   * @param bool $lowerCase
   *   (optional) Pass TRUE to convert to lowercase. Defaults to FALSE.
   *
   * @return string
   *   Roman numeral representing the passed integer.
   */
  public function generate($number,$lowerCase) {
  	
  	$actual_number=intval($number);
  	$result='';
  	
  	//array to store romain numbers
  	$array_romans = array('M' => 1000,'CM' => 900,'D' => 500,'CD' => 400,'C' => 100,'XC' => 90,'L' => 50,'XL' => 40,'X' => 10,'IX' => 9,'V' => 5,'IV' => 4,'I' => 1);
  	
  	//logic to generate a roman numeral based on the integer input
  	foreach($array_romans as $roman_number => $value){
  		$matches = intval($actual_number/$value);
  		$result .= str_repeat($roman_number,$matches);
  		$actual_number = $actual_number % $value;
  	}
  	
  	
  	if($lowerCase) {
	//return as lowercase roman numerals
	return strtolower($result);
	}
  	else {
  	//return as uppercase roman numerals
  		return $result;  	
  	}
  }
}
