<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class views_table extends CI_Controller {

	public function index()
	{
		$this->template->load('template','views_table');
	}

	 public function Tambah_views_table()
    {
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('nama', 'Nama ', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        $this->form_validation->set_message('required', '{field}  masih kosong, silakan di isi dulu');
        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
        if ($this->form_validation->run() == FALSE) {
             
            $this->template->load('template','viewsAdd');
        }else {
            echo 'success';
        }
    }

}
