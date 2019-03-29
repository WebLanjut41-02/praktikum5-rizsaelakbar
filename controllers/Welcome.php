<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_data');
	}

	public function index(){
		$this->load->database();
		$jumlah_data = $this->m_data->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/welcome/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['user'] = $this->m_data->data($config['per_page'],$from);
		$this->load->view('v_data',$data);
	}

	function search_keyword()
    {
				$this->load->database();
				$jumlah_data = $this->m_data->jumlah_data();
				$this->load->library('pagination');
				$config['base_url'] = base_url().'index.php/welcome/index/';
				$config['total_rows'] = $jumlah_data;
				$config['per_page'] = 5;
				$from = $this->uri->segment(3);
				$this->pagination->initialize($config);
        $keyword    =   $this->input->post('keyword');
        $data['user']    =   $this->m_data->search($keyword);
        $this->load->view('v_data',$data);
    }

		function tambah_aksi(){
			$nama = $this->input->post('nama');
			$nim = $this->input->post('nim');
			$tgl = $this->input->post('tgl');
			$ipk = $this->input->post('ipk');
			$kelas = $this->input->post('kelas');

			$data = array(
				'nama' => $nama,
				'nim' => $nim,
				'tgl_lahir' => $tgl,
				'ipk' => $ipk,
				'kelas' => $kelas
				);
			$this->m_data->input_data($data,'user');
			redirect('welcome');
		}

		function edit_aksi(){
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$nim = $this->input->post('nim');
			$tgl = $this->input->post('tgl');
			$ipk = $this->input->post('ipk');
			$kelas = $this->input->post('kelas');

			$data = array(
				'nama' => $nama,
				'nim' => $nim,
				'tgl_lahir' => $tgl,
				'ipk' => $ipk,
				'kelas' => $kelas
				);

			$this->m_data->edit_data($id,$data);
			redirect('welcome');
		}

		function tambah(){
			$this->load->view('tambah_form');
		}

		function edit(){
			$id = $this->input->get('id');
			$data = $this->m_data->get_data($id);
			$this->session->set_userdata('data1', $data);
			$this->load->view('edit_form');
		}

		function hapus_aksi(){
			$id = $this->input->get('id');
			$this->m_data->hapus_data($id);
			redirect('welcome');
		}
}
