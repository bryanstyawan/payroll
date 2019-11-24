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
		$data['period'] = $data_sender['value2'].'-'.$data_sender['value1'];		
		$data['list'] = $this->Mhome->data_pegawai_payroll($data['period']);
		$this->load->view('home/report_payroll/filter',$data);						
	}

	public function slip_gaji($nik,$period)
	{
		# code...
		$data['carousel']         = 'off'; 
		$data['content']          = "home/report_payroll/slip";
		$data['nik']              = $nik;
		$data['period']           = $period;
		$data['list'] = $this->Mhome->data_pegawai_payroll($data['period'],$data['nik']);		
		$this->load->view('home',$data);				
	}

	public function detail($nik,$period)
	{
		# code...
		$data['carousel']         = 'off'; 
		$data['content']          = "home/report_payroll/input";
		$data['nik']              = $nik;
		$data['period']           = $period;
		$data['list'] = $this->Mhome->data_pegawai_payroll($data['period'],$data['nik']);		
		$this->load->view('home',$data);				
	}	

	public function store_slip_gaji()
	{
		# code...
		$res_data    = 0;
		$text_status = "";
		$data_sender = $this->input->post('data_sender');
		$getData     = $this->Allcrud->getData('payroll_tunjangan_potongan',array('nik' => $data_sender['f_nik'], 'payroll_period' => $data_sender['f_period'] ))->result_array();
		$data_store = array
		(
			'nik'                            => $data_sender['f_nik'], 
			'payroll_period'                 => $data_sender['f_period'], 
			'gaji_pokok'                     => $data_sender['f_gaji_pokok'], 
			'tunjangan_jabatan'              => $data_sender['f_tunjangan_jabatan'], 
			'tunjangan_kehadiran'            => $data_sender['f_tunjangan_kehadiran'], 
			'upah_lembur'                    => $data_sender['f_upah_lembur'], 
			'potongan_keterlambatan_absensi' => $data_sender['f_potongan_keterlambatan_absensi'], 
			'potongan_iuran_bpjs_kesehatan'  => $data_sender['f_potongan_iuran_bpjs_kesehatan'], 
			'potongan_iuran_bpjs_tk'         => $data_sender['f_potongan_iuran_bpjs_tk'], 
			'potongan_pph21'                 => $data_sender['f_potongan_pph21']																																					
		);		
		if ($getData != array()) {
			# code...
			$res_data     = $this->Allcrud->editData('payroll_tunjangan_potongan',$data_store,array('nik' => $data_sender['f_nik'], 'payroll_period' => $data_sender['f_period'] ));			
		}
		else
		{
			$res_data     = $this->Allcrud->addData('payroll_tunjangan_potongan');
		}

		$text_status = $this->Globalrules->check_status_res($res_data,'Data telah disimpan.');		
		$res = array
					(
						'status' => $res_data,
						'text'   => $text_status
					);
		echo json_encode($res);		

	}
}
