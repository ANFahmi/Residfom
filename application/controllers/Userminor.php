<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Userminor extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//validasi jika user belum login
		$this->data['CI'] = &get_instance();
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_Admin');
		$this->load->model('m_tps');
		$this->load->library(array('cart'));
		if ($this->session->userdata('laman') != TRUE) {
			$url = base_url('login');
			redirect($url);
		}
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->data['idbo'] = $this->session->userdata('ses_id');
		$this->data['title_web'] = 'Dashboard ';
		$this->data['count_pengguna'] = $this->db->query("SELECT * FROM tbl_login")->num_rows();
		$this->load->view('header_view', $this->data);
		$this->load->view('sidebar_view', $this->data);
		$this->load->view('user_minor/user_view', $this->data);
		$this->load->view('footer_view', $this->data);
	}

	public function kembali()
	{
		$this->data['idbo'] = $this->session->userdata('ses_id');
		$this->data['user'] = $this->M_Admin->get_table('tbl_login');

		$this->data['title_web'] = 'Data User ';
		$this->load->view('header_view', $this->data);
		$this->load->view('sidebar_view', $this->data);
		$this->load->view('kembali/home', $this->data);
		$this->load->view('footer_view', $this->data);
	}


	public function denda()
	{
		$this->data['idbo'] = $this->session->userdata('ses_id');

		$this->data['denda'] =  $this->db->query("SELECT * FROM tbl_biaya_denda ORDER BY id_biaya_denda DESC");


		$this->data['tps'] = $this->m_tps->get_all_data();
		$this->data['title_web'] = ' GIS ';
		$this->load->view('header_view', $this->data);
		$this->load->view('sidebar_view', $this->data);
		$this->load->view('GIS/gis_view', $this->data);
		$this->load->view('footer_view', $this->data);
	}
}
