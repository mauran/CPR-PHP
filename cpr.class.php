<?php
/*
 * ----------------------------------------------------------------------------
 * "THE BEER-WARE LICENSE" (Revision 42):
 * <mauran@mauran.me> wrote this file. As long as you retain this notice you
 * can do whatever you want with this stuff. If we meet some day, and you think
 * this stuff is worth it, you can buy me a beer in return --Mauran Muthiah
 * ----------------------------------------------------------------------------
 */

class CPR {

	public static function check($cpr, $gender)
	{
		if(strlen($cpr) < 10) {
			trigger_error('The CPR-number is less than 10 digits.');
			return;
		}
		
		if($gender == "male" || $gender == 'm') {
			return in_array($cpr[9], array('1','3','5','7','9'));
		}
		elseif($gender == "female" || $gender == 'f') {
			return in_array($cpr[9], array('0','2','4','6','8'));
		}
	}

}

/*
 * ----------------------------------------------------------------------------
 * THERE BE EXAMPLES
 * ----------------------------------------------------------------------------
 */
if(CPR::check('1234567890', 'f')) {
	echo '1234567890 is a valid CPR-number.';
} else {
	echo '1234567890 is not a valid CPR-number.';
}
