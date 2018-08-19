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
		//vytvoří připojení k api
		define('endora_key',$key);//nastaví klíč připojení
		$raw = file_get_contents('https://webadmin.endora.cz/api/xml/key/'.endora_key);//získá data api
		$raw1 = json_decode($raw, true);//dekóduje je
		if(empty($raw['error'])){//zjistí chyby
			$endora_api = $raw1; //nastaví proměnou
		$endora_connected = true;
			define('endora_connected', 'true', true);
			$GLOBALS['endora_api'] = $raw1;
			if($return !== 'true'){
				return true;
			} else {
				return $endora_api;
			}
		}else{
			trigger_error("API klíč je neplatný", E_USER_ERROR);//vyhodí PHP chybu
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
				return $endora_api['files'][$type];//vrátí danou hodnotu
			} else {
				trigger_error("nesprávný typ v API->files()", E_USER_ERROR);//vyhodí PHP chybu, pokud daná hodnota neexistuje
				return false;
			}
		} else {
			trigger_error("API nepropojeno", E_USER_ERROR);//musí být připojen
			return false;
		}
	}
	public function diskspace($type = 'current'){
		global $endora_api,$endora_connected;
		if(endora_connected == 'true'){
			if($type == 'current' || $type == 'limit'){
				return $endora_api['diskspace'][$type];//vrátí danou hodnotu
			} else {
				trigger_error("nespravny type v API->diskspace()", E_USER_ERROR);//vyhodí PHP chybu, pokud daná hodnota neexistuje
				return false;
			}
		} else {
			trigger_error("API nepropojeno", E_USER_ERROR);//musí být připojen
			return false;
		}
	}	
	public function traffic($type = 'current'){
		global $endora_api,$endora_connected;
		if(endora_connected == 'true'){
			if($type == 'current' || $type == 'limit'){
				return $endora_api['traffic'][$type];//vrátí danou hodnotu
			} else {
				trigger_error("nespravny type v API->diskspace()", E_USER_ERROR);//vyhodí PHP chybu, pokud daná hodnota neexistuje
				return false;
			}
		} else {
			trigger_error("API nepropojeno", E_USER_ERROR);//musí být připojen
			return false;
		}
	}
	public function program(){
		global $endora_api,$endora_connected;
		if($endora_connected == true){
			return $endora_api['variant']['program'];//vrátí danou hodnotu
		} else {
			trigger_error("API nepropojeno", E_USER_ERROR);//musí být připojen
			return false;
		}
	}
}
