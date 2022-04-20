<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	public function index()
	{
		$this->load->view('siswa/v-form-siswa');
	}

  public function save()
  {
    if($this->validate() == true) {
      $data['data'] = $_POST;
      $this->load->view('siswa/v-index', $data);
    }
  }

  protected function validate()
  {
    $this->form_validation->set_rules(
      'nis',
      'NIS',
      [
        'required' => 'NIS Harus diisi',
      ]
    );
    $this->form_validation->set_rules(
      'nama',
      'Nama Siswa',
      [
        'required' => 'Nama Siswa Harus diisi',
      ]
    );
    $this->form_validation->set_rules(
      'kelas',
      'Kelas',
      [
        'required' => 'Kelas Harus diisi',
      ]
    );
    $this->form_validation->set_rules(
      'tempat_lahir',
      'Tempat Lahir',
      [
        'required' => 'Tempat Lahir Harus diisi',
      ]
    );
    $this->form_validation->set_rules(
      'tanggal_lahir',
      'Tanggal Lahir',
      [
        'required' => 'Tanggal Lahir Harus diisi',
      ]
    );
    $this->form_validation->set_rules(
      'alamat',
      'Alamat',
      [
        'required' => 'Alamat Harus diisi',
      ]
    );
    $this->form_validation->set_rules(
      'jk',
      'Jenis Kelamin',
      [
        'required' => 'Jenis Kelamin Harus diisi',
      ]
    );
    $this->form_validation->set_rules(
      'agama',
      'Agama',
      [
        'required' => 'Agama Harus diisi',
      ]
    );
    return $this->form_validation->run();
  }
}
