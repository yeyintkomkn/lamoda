<?php

namespace App\Http\CustomClass;
use App\Site_information;

class SiteData{

	private $site_data;

	public function __construct(){
		$site=Site_information::findOrfail(1);
		$this->set_site_data($site);
	}

	private function set_site_data($site){
		$this->site_data=$site;
	}

	public function get_site_data(){
		return $this->site_data;
	}

}