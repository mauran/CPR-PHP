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
			trigger_error("CPR-nummeret er ikke på 10 tegn");
			return;
		}
		
		if($gender == "male") {
			return in_array($cpr[9], array('1','3','5','7','9'));
		}
		elseif($gender == "female") {
			return in_array($cpr[9], array('0','2','4','6','8'));
		}
	}

}
