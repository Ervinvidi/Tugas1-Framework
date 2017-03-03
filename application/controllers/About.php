<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(
        		'nama' => 'Ervin Vidi Wicahya',
        		'jurusan' => 'Teknik Informatika',
        		'kelas' => 'TI - 2A',
        		'nim' => '1541180015',
        		'nohp' => '+6285645516710',
        		'hoby' => 'Sepak Bola, Main Game, Desaign',
        		'alamat' => 'Desa Ngembul, Kecamatan Binangun, Blitar',
        		'email' => 'ervin19.ev@gmail.com',
				);

		$this->load->view('about', $data);

		
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */