<?php
class User extends CI_Controller {
            
    public function __construct()
    {
        parent::__construct(); 
        if($this->session->userdata('status')!="login"){
            redirect(base_url("v_home"));
        }
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('pagination');
        $this->load->library('session','form_validation');
		$this->load->library('cart');
        $this->load->model('m_home');       
    }
	
     public function index()
    {
    $this->load->model('m_home');
	$data['sewa'] = $this->m_home->tampil2();  
	$this->load->view('konsumen/v_home', $data);
    }    

	public function persyaratan()
	{
		$this->load->view('konsumen/v_persyaratan');
	}
	
	public function about()
	{
		$this->load->view('konsumen/v_persyaratan');
	}
	
	public function pencarian() 
	{
		$alat = $_POST['sinbi'];
		$this->load->model('m_home');		
		$data['sewa'] = $this->m_home->pencarian($alat)->result_array();
		$this->load->view("konsumen/v_home2",$data); 
    } 

    public function lihat($id)//informasi detail alat
    {
		//$this->ceklogin();
		$this->load->model('m_home');
		$data_soal = $this->m_home->lihat_alat("where ID_alat = '$id'");//->result_array();

       
        if($data_soal->num_rows() ){
            $data=array(
                        "sewa"=>$this->m_home->lihat_alat("where ID_alat='$id'")->result(),
                        );
            $this->load->view("konsumen/v_lihat_alat",$data);
        }else{
            $this->load->view("konsumen/v_home",$data);
        }                            
    }
	
	public function sewa()
	{
		$sewa = $this->session->userdata("username");		
		$data = array(
			'alat' => $this->m_home->sewa("where nama = '$sewa'")->result_array(),
		);
		$this->load->view('konsumen/v_sewa',$data);
	}
	
	public function pinjam(){
		$sewa = $this->session->userdata("username");	
		
		$data = array(
				'alat' => $this->m_home->sewa("where nama = '$sewa'")->result_array(),
				'id' =>$this->input->post('ID_sewa'),
				'name' => $this->input->post('nama_alat'),
				'price' => $this->input->post('harga_sewa'),
				'qty' => $this->input->post('jumlah_alat'),
			);
	
		$this->cart->insert($data);
		//echo $this->show_cart();
		//print_r ($this->cart->contents());
		$this->load->view('konsumen/v_sewa', $data);
			
	}

	function load_cart(){ //load data cart
		echo $this->pinjam();
	}	
	
	public function insert(){
		$this->load->model('m_home');
		
		$nama  = $this->input->post ('nama');
		$alamat  = $this->input->post ('alamat');
		$no_tlpn  =$this->input->post ('no_tlpn');
		$tgl_penyewaan  = $this->input->post ('tgl_penyewaan');
		$tgl_pengembalian = $this->input->post ('tgl_pengembalian');
		$name = $this->input->post ('nama_alat');
		$price = $this->input->post ('harga_sewa');
		$qty = $this->input->post ('jumlah_alat');
		$subtotal = $this->input->post ('subtotal');
		$total= $this->input->post ('biaya_sewa');
		
		foreach($this->cart->contents() as $alat){
		$data = array(						
				'nama'=> $nama,
				'alamat'=>$alamat,
				'no_tlpn'=>$no_tlpn,
				'tgl_penyewaan' => $tgl_penyewaan,
				'tgl_pengembalian' => $tgl_pengembalian,
				'nama_alat' => $alat ['name'],
				'harga_sewa' => $alat ['price'],
				'jumlah_alat' => $alat ['qty'],
				'subtotal' => $alat ['subtotal'],
				//'biaya_sewa' => $total,	//[$alat]
			);
			$this->db->insert('penyewaan', $data);
				}
				 $this->session->set_flashdata('pesan', 'data pemesanan berhasil disimpan, harap menunggu konfirmasi dari pihak diaz adventure.');
			redirect('user');
	}
	
	//function hapus($rowid) 
	//{
		//if ($rowid=="all")
			//{
				//$this->cart->destroy();
			//}
		//else
			//{
				//$data = array('rowid' => $rowid,
			  		//		  'qty' =>0);
				//$this->cart->update($data);
			//}
		//redirect('konsumen/v_sewa');
	//}
}