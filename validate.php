<?php
/*
@Author: Mauran Muthiah
@Description: :)
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
	
	public $possible = array();
	
	private $_nr = array();
	
	function __construct($gender,$date){
		// Autorun
		$this->_gender($gender);
	}
	
	private function _gender($string){
		switch($string){
			case 'm':
			case 'male':
			case 'mand':
				$this->_nr = array('1','3','5','7','9');
			break;
			case 'k':
			case 'female':
			case 'kvinde':
				$this->_nr = array('0','2','4','6','8');
			break;
			default:
				$this->_nr = false;
			break;
		}
	}
	
	private function _date($string){
		if($this->_nr !== false){
			if(is_array($string) && !empty($string['day']) && !empty($string['month']) && !empty($string['year'])){
				
			}
			else
			{
			}
		}
	}
}


$class = new cpr();
?>