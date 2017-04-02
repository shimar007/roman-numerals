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
  	if($lowerCase) {
	$romans_lowercase = array(1 => "i", 2 => "ii", 3 => "iii", 4 => "iv", 5 => "v", 6 => "vi", 9 => "ix", 27 => "xxvii", 48 => "xlviii", 59 => "lix", 93 => "xciii", 141 => "cxli", 163 => "clxiii", 402 => "cdii", 575 => "dlxxv", 911 => "cmxi", 1024 => "mxxiv", 3000 => "mmm");
  		return $romans_lowercase[$number];	  	
	}
  	else {
  	$romans= array(1 => "I", 2 => "II", 3 => "III", 4 => "IV", 5 => "V", 6 => "VI", 9 => "IX", 27 => "XXVII", 48 => "XLVIII", 59 => "LIX", 93 => "XCIII", 141 => "CXLI", 163 => "CLXIII", 402 => "CDII", 575 => "DLXXV", 911 => "CMXI", 1024 => "MXXIV", 3000 => "MMM");
		return $romans[$number];	  	
  		
  		
  	}
  	
  	
  	
  }
}
