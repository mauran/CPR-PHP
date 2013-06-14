<?php
/*
@Author: Mauran Muthiah
@Description: :))

[1, 3, 5, 7, 9]
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
		} else {

		}
	}



}


$class = new cpr();
//kage
?>
