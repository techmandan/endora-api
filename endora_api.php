<?
//////////////////////////
//author: Daniel Bulant //
//web: danbulant.eu     //
//class: endora api     //
//license: MIT          //
//////////////////////////
class endora_api{
	public $endora_api,$endora_connected;
	
	public function connect($key, $return = 'false'){
		//define('endora_connected','true',true);
		define('endora_key',$key);
		$raw = file_get_contents('https://webadmin.endora.cz/api/xml/key/'.endora_key);
		$raw1 = json_decode($raw, true);
		if(empty($raw['error'])){
			$endora_api = $raw1;
		$endora_connected = true;
			define('endora_connected', 'true', true);
			$GLOBALS['endora_api'] = $raw1;
			if($return !== 'true'){
			return true;
			} else {
				return $endora_api;
			}
			//define("endora-api",$raw1);
		}else{
			trigger_error("API key je neplatny", E_USER_ERROR);
			return false;
		}
	}
	public function __construct($key, $return = 'false'){
		$this->connect($key,$return);
	}
	public function files($type = 'current'){
		global $endora_api,$endora_connected;
		if(endora_connected == 'true'){
			if($type == 'current' || $type == 'limit'){
				return $endora_api['files'][$type];
			} else {
			trigger_error("nespravny type v API->files()", E_USER_ERROR);
				return false;
			}
		} else {
			trigger_error("API nepropojeno", E_USER_ERROR);
			return false;
		}
	}
	public function diskspace($type = 'current'){
		global $endora_api,$endora_connected;
		if(endora_connected == 'true'){
			if($type == 'current' || $type == 'limit'){
				return $endora_api['diskspace'][$type];
			} else {
			trigger_error("nespravny type v API->diskspace()", E_USER_ERROR);
				return false;
			}
		} else {
			trigger_error("API nepropojeno", E_USER_ERROR);
			return false;
		}
	}	
	public function traffic($type = 'current'){
		global $endora_api,$endora_connected;
		if(endora_connected == 'true'){
			if($type == 'current' || $type == 'limit'){
				return $endora_api['traffic'][$type];
			} else {
			trigger_error("nespravny type v API->diskspace()", E_USER_ERROR);
				return false;
			}
		} else {
			trigger_error("API nepropojeno", E_USER_ERROR);
			return false;
		}
	}
	public function program(){
		global $endora_api,$endora_connected;
		if($endora_connected == true){
				return $endora_api['variant']['program'];
		} else {
			trigger_error("API nepropojeno", E_USER_ERROR);
			return false;
		}
	}
}
