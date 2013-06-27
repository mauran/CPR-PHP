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

	function __construct($gender) {
		$this->gender($gender);	
	}

	public function gender($gender)
	{
		if($gender == "male") {
			return array('1','3','5','7','9');
		}
		elseif($gender == "female") {
			return array('0','2','4','6','8');
		}
	}

}

$class = new cpr();
