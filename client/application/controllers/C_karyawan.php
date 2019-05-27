<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_karyawan extends CI_Controller {

	var $API ="";

	function __construct() {
		parent::__construct();
		$this->API="http://api.akhmad.id/uaspromnet/";
	}

	// proses yang akan di buka saat pertama masuk ke controller
	public function index()
	{

		// $this->curl->http_header("X-Nim", "1607488"):
		// $this->curl->http method( "get");
		// $this->curl->create("https://api.akhmad.id/uaspromnet/user");
		//$this->curl->execute();
		// $this->curl->debug();

		// $data[ 'karyawan'] = json_decode($this->curl->simple_get($this->API.' /user'));

		// $this->curl->http_header("X-Nim", "1700654");
		// $this->curl->simple_get($this->API .'/user');
		// $this->curl->debug();

		$this->curl->http_header("X-Nim", "1700654");
		$data['jual'] = json_decode($this->curl->simple_get($this->API.'penjualan'));

   	$this->curl->http_header("X-Nim", "1700654");
   	$data['motor'] = json_decode($this->curl->simple_get($this->API.'motor'));

   	$this->curl->http_header("X-Nim", "1700654");
	  $data['cicilan'] = json_decode($this->curl->simple_get($this->API.'cicil'));

   	$this->curl->http_header("X-Nim", "1700654");
  	$data['uang_muka'] = json_decode($this->curl->simple_get($this->API.'uangmuka'));

	 	$this->load->view('V_karyawan', $data);
	}
}
