<?php
class GrcPool_Boinc_Account_Url_OBJ extends GrcPool_Boinc_Account_Url_MODEL {
	public function __construct() {
		parent::__construct();
	}
}

class GrcPool_Boinc_Account_Url_DAO extends GrcPool_Boinc_Account_Url_MODELDAO {

	public function initWithUrl($url) {
		return $this->fetch(array($this->where('url',$url)));
	}
	
}