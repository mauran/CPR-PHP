<?php
/*
 * ----------------------------------------------------------------------------
 * "THE BEER-WARE LICENSE" (Revision 42):
 * <mauran@mauran.me> and <nordbjerg.oliver@gmail.com> wrote this file.
 * As long as you retain this notice you can do whatever you want with this
 * stuff. If we meet some day, and you think this stuff is worth it, you can
 * buy us a beer in return --Mauran Muthiah and Oliver Nordbjerg
 * ----------------------------------------------------------------------------
 */

class CPR {

	public static function check($cpr)
	{
		if(strlen($cpr) < 10) {
			trigger_error('The CPR-number is less than 10 digits.');
			return;
		}
		
		return self::mod11($cpr);
	}
	
	private static function mod11($cpr)
	{
		$control = array(4, 3, 2, 7, 6, 5, 4, 3, 2);
		
		$sum = 0;
		for($i = 0; $i < 8; $i++) {
			$sum += $cpr[$i] * $control[$i];
		}

		return ((11 - $sum % 11) == $cpr[9]);
	}

}

/*
 * ----------------------------------------------------------------------------
 * THERE BE EXAMPLES
 * ----------------------------------------------------------------------------
 */
if(CPR::check('1234567890')) {
	echo '1234567890 is a valid CPR-number.';
} else {
	echo '1234567890 is not a valid CPR-number.';
}
