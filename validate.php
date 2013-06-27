<?php
/*
 * ----------------------------------------------------------------------------
 * "THE BEER-WARE LICENSE" (Revision 42):
 * <mauran@mauran.me> wrote this file. As long as you retain this notice you
 * can do whatever you want with this stuff. If we meet some day, and you think
 * this stuff is worth it, you can buy me a beer in return --Mauran Muthiah
 * ----------------------------------------------------------------------------
 */

class cpr {
	
	private $_cpr;

	function __construct($cpr) {
		if(strlen($cpr) < 10) {
			trigger_error("CPR-nummeret er ikke på 10 tegn");
			return;
		} else {
			$this->_cpr = $cpr;
		}
	}

	public function check($gender)
	{
		if($gender == "male") {
			return in_array($this->_cpr[9], array('1','3','5','7','9'));
		}
		elseif($gender == "female") {
			return in_array($this->_cpr[9], array('0','2','4','6','8'));
		}
	}

}
