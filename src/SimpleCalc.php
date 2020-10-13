<?php
namespace SimpleCalc;
class SimpleCalc
{
	public function addPercentage($value, $percentage)
	{
		if (!is_numeric($percentage) || $percentage < 0) {
			 throw new \Exception('Invalid Percentage');
		}
		
		$result = $value + (abs($value) * ($percentage / 100));
		if ((int)$result == $result) {
			 $result = (int)$result;
		}
		return $result;
	}
}