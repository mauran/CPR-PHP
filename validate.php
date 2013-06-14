<?php
/*
@Author: Mauran Muthiah
@Description: :)

[1, 3, 5, 7, 9]
*/

class cpr {

	function __construct($sex) {
		$this->doSexyTime($sex);
		
	}

	public function doSexyTime($sex)
	{
		// gon' make sweet love to you
		if($sex == "male") {
			return array('1','3','5','7','9');
		}
		elseif($sex == "female") {
			return array('0','2','4','6','8');
		} else {

		}
	}



}


$class = new cpr();
?>
