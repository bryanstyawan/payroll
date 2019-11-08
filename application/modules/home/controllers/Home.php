<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct ()
	{
		parent::__construct();
		$this->load->model ('Mhome', '', TRUE);
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		redirect('home/main');
	}

	public function main()
	{
		ini_set('date.timezone', 'Asia/Jakarta');
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata('session_login') == "")
		{
			//get user data
			$data['carousel'] = 'off'; 
			$data['content']  = "home/home/index";
			$this->load->view('home',$data);			
		}		
		else {
			# code...
		}
	}

	public function report_payroll()
	{
		# code...
		$data['carousel']         = 'off'; 
		$data['content']          = "home/report_payroll/index";
		$this->load->view('home',$data);		
	}

	public function filter_data_payroll()
	{
		# code...
		$data_sender = $this->input->post('data_sender');
		$data['list'] = $this->Mhome->data_pegawai_payroll();
		$this->load->view('home/report_payroll/filter',$data);						
	}
}
