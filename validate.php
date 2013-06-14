<?php
/*
@Author: Mauran Muthiah
@Description: :)
*/

class cpr {
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
				$date = '';
				if(is_int($string['day'])){
					if(strlen($string['day'])==1){
						$date .= '0'.$string['day'];
					}
					else
					{
						$date .= $string['day'];
					}
				}
			}
			else
			{
			}
		}
	}
}


$class = new cpr();
?>