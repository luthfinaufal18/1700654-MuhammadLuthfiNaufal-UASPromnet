<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_penjualan extends CI_Controller {

	var $API ="";

	function __construct() {
		parent::__construct();
		$this->API="http://api.akhmad.id/uaspromnet";
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
		$this->curl->http_header("X-Nim", "1700654");
		$this->curl->simple_get($this->API .'/penjualan');
		$this->curl->debug();
		$this->load->view('V_karyawan');
	}


	// proses untuk menambah data
	// insert data kontak
	// function add(){
	//
	// 	$data = array(
	// 		'id'      =>  $this->input->post('id'),
	// 		'nomor_ktp'      =>  $this->input->post('nomor_ktp'),
	// 		'name'    =>  $this->input->post('name'),
	// 		'email'	  =>  $this->input->post('email'),
	// 		'address' =>  $this->input->post('address'),
	// 		'phone' =>  $this->input->post('phone'),
	// 		'jenis_kelamin'	  =>  $this->input->post('jenis_kelamin'),
	// 		'tempat_lahir'	  =>  $this->input->post('tempat_lahir'),
	// 		'tanggal_lahir'	  =>  $this->input->post('tanggal_lahir'),
	// 		'npwp'	  =>  $this->input->post('npwp'),
	// 		'agama'	  =>  $this->input->post('agama')
	// 	);
	// 	$insert =  $this->curl->simple_post($this->API.'/Karyawan', $data, array(CURLOPT_BUFFERSIZE => 0));
	//
	// 	if($insert)
	// 	{
	// 		$this->session->set_flashdata('hasil','Insert Data Berhasil');
	// 	}else
	// 	{
	// 		$this->session->set_flashdata('hasil','Insert Data Gagal');
	// 	}
	//
	// 	redirect('C_karyawan');
	//
	// }
	//
	// // update data kontak
	// function update($id){
	//
	// 	$data = array(
	// 		'id'      =>  $id,
	// 		'nomor_ktp'      =>  $this->input->post('nomor_ktp'),
	// 		'name'    =>  $this->input->post('name'),
	// 		'email'	  =>  $this->input->post('email'),
	// 		'address' =>  $this->input->post('address'),
	// 		'phone' =>  $this->input->post('phone'),
	// 		'jenis_kelamin'	  =>  $this->input->post('jenis_kelamin'),
	// 		'tempat_lahir'	  =>  $this->input->post('tempat_lahir'),
	// 		'tanggal_lahir'	  =>  $this->input->post('tanggal_lahir'),
	// 		'npwp'	  =>  $this->input->post('npwp'),
	// 		'agama'	  =>  $this->input->post('agama')
	// 	);
	// 	$update =  $this->curl->simple_put($this->API.'/Karyawan', $data, array(CURLOPT_BUFFERSIZE => 0));
	//
	// 	if($update)
	// 	{
	// 		$this->session->set_flashdata('hasil','Update Data Berhasil');
	// 	}else
	// 	{
	// 		$this->session->set_flashdata('hasil','Update Data Gagal');
	// 	}
	//
	// 	redirect('C_karyawan');
	//
	// }
	//
	// // proses untuk menghapus data pada database
	// function delete($id){
	// 	if(empty($id)){
	// 		redirect('C_karyawan');
	// 	}else{
	// 		$delete =  $this->curl->simple_delete($this->API.'/Karyawan', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10));
	// 		if($delete)
	// 		{
	// 			$this->session->set_flashdata('hasil','Delete Data Berhasil');
	// 		}else
	// 		{
	// 			$this->session->set_flashdata('hasil','Delete Data Gagal');
	// 		}
	//
	// 		redirect('C_karyawan');
	// 	}
	// }
	//
	// //TUGAS : bikin fungsi update di client menggunakan service
	// //
	// //
}
