<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{   
    function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Asia/Jakarta');

		$this->load->model('data_model');

		// cek session yang login, 
		// jika session status tidak sama dengan session telah_login, berarti pengguna belum login
		// maka halaman akan di alihkan kembali ke halaman login.
		if($this->session->userdata('status')!="login"){
			redirect(base_url().'login?alert=login');
		}
	}

    public function index()
    {
        $data['pageTitle'] = 'Dashboard';                
        $data['pageContent'] = $this->load->view('dashboard/index', $data, TRUE);

        $this->load->view('template/layout', $data);
    }

    public function datamasjid()
    {
        $data['list'] = $this->data_model->get_data('data_masjid')->result();
        $data['pageTitle'] = 'Data Masjid';                
        $data['pageContent'] = $this->load->view('dashboard/list', $data, TRUE);

        $this->load->view('template/layout', $data);
    }

    public function tambah_masjid()
    {
        $data['pageTitle'] = 'Tambah Data Masjid';                
        $data['pageContent'] = $this->load->view('dashboard/tambah', $data, TRUE);

        $this->load->view('template/layout', $data);
    }

    public function store()
    {
        $this->form_validation->set_rules('nama_masjid', 'Nama Masjid', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('latitude', 'Latitude', 'required');
        $this->form_validation->set_rules('longitude', 'Longitude', 'required');

        if($this->form_validation->run() != false){
            

            $nama_masjid        =   $this->input->post('nama_masjid');
            $alamat             =   $this->input->post('alamat');
            $luas_tanah         =   $this->input->post('luas_tanah');
            $status_tanah       =   $this->input->post('status_tanah');
            $luas_bangunan      =   $this->input->post('luas_bangunan');
            $daya_tampung       =   $this->input->post('daya_tampung');
            $jumlah_pengurus    =   $this->input->post('jumlah_pengurus');
            $jumlah_imam        =   $this->input->post('jumlah_imam');
            $jumlah_khatib      =   $this->input->post('jumlah_khatib');
            $fasilitas          =   $this->input->post('fasilitas');
            $kegiatan           =   $this->input->post('kegiatan');
            $latitude           =   $this->input->post('latitude');
            $longitude           =   $this->input->post('longitude');

            // proses gambar
            $upload['upload_path'] = './assets/uploads/' . $id . '/';
            $upload['allowed_types'] = 'gif|jpg|png';

            $files = $_FILES;
            $count = count($_FILES['userfile']['name']);
            $this->load->library('upload', $upload);

            if (!is_dir('assets/uploads/'.$id)) {
                mkdir('./assets/uploads/'.$id, 0777, true);
            }

            for($i = 0; $i < $count; $i++) {
            $_FILES['userfile']['name']= $files['userfile']['name'][$i];
            $_FILES['userfile']['type']= $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error']= $files['userfile']['error'][$i];
            $_FILES['userfile']['size']= $files['userfile']['size'][$i];    
            
            if(!$this->upload->do_upload())
            {
                $error_message = $this->upload->display_errors();

                $this->session->set_flashdata('error', $error_message);
                redirect(base_url().'admin/tambah_masjid');
            }
            $dataInfo[] = $this->upload->data();
            // $this->upload->do_upload();
            // $this->upload->data('userfile');
            }

            $all_img = '';

            if(count($dataInfo) > 0) {
                foreach($dataInfo as $info) {
                    $all_img .= $info['file_name'];
                    $all_img .= ',';
                }
            }
            // end proses gambar

            $data = array(
                'nama_masjid'       => $nama_masjid,
                'alamat'            => $alamat,
                'luas_tanah'        => $luas_tanah,
                'status_tanah'      => $status_tanah,
                'luas_bangunan'     => $luas_bangunan,
                'daya_tampung'      => $daya_tampung,
                'jumlah_pengurus'   => $jumlah_pengurus,
                'jumlah_imam'       => $jumlah_imam,
                'jumlah_khatib'     => $jumlah_khatib,
                'fasilitas'         => $fasilitas,
                'kegiatan'          => $kegiatan,
                'latitude'          => $latitude,
                'longitude'         => $longitude,
                'gambar'            => rtrim($all_img,","),
            );
            
            $this->data_model->insert_data($data, 'data_masjid');


            $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan..');
            redirect(base_url().'admin/tambah_masjid');
        }else{
            $this->session->set_flashdata('error', 'Data Gagal Ditambahkan');
            redirect(base_url().'admin/tambah_masjid');
        }
    }

    public function edit_data($id)
    {
        $where = array(
			'id_masjid' => $id
		);
        $data['dataedit'] = $this->data_model->edit_data($where, 'data_masjid')->result();
        $data['pageTitle'] = 'Data Masjid';                
        $data['pageContent'] = $this->load->view('dashboard/edit', $data, TRUE);

        $this->load->view('template/layout', $data);
    }

    public function update()
    {
        $this->form_validation->set_rules('nama_masjid', 'Nama Masjid', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('latitude', 'Latitude', 'required');
        $this->form_validation->set_rules('longitude', 'Longitude', 'required');

        if($this->form_validation->run() != false){

            $id = $this->input->post('id');

            $nama_masjid        =   $this->input->post('nama_masjid');
            $alamat             =   $this->input->post('alamat');
            $luas_tanah         =   $this->input->post('luas_tanah');
            $status_tanah       =   $this->input->post('status_tanah');
            $luas_bangunan      =   $this->input->post('luas_bangunan');
            $daya_tampung       =   $this->input->post('daya_tampung');
            $jumlah_pengurus    =   $this->input->post('jumlah_pengurus');
            $jumlah_imam        =   $this->input->post('jumlah_imam');
            $jumlah_khatib      =   $this->input->post('jumlah_khatib');
            $fasilitas          =   $this->input->post('fasilitas');
            $kegiatan           =   $this->input->post('kegiatan');
            $latitude           =   $this->input->post('latitude');
            $longitude           =   $this->input->post('longitude');

            $where = array(
				'id_masjid' => $id
			);

            $data = array(
                'nama_masjid'       => $nama_masjid,
                'alamat'            => $alamat,
                'luas_tanah'        => $luas_tanah,
                'status_tanah'      => $status_tanah,
                'luas_bangunan'     => $luas_bangunan,
                'daya_tampung'      => $daya_tampung,
                'jumlah_pengurus'   => $jumlah_pengurus,
                'jumlah_imam'       => $jumlah_imam,
                'jumlah_khatib'     => $jumlah_khatib,
                'fasilitas'         => $fasilitas,
                'kegiatan'          => $kegiatan,
                'latitude'          => $latitude,
                'longitude'         => $longitude,
            );
            
            $this->data_model->update_data($where, $data, 'data_masjid');
            // gambar1

            $upload['upload_path'] = './assets/uploads/' . $id . '/';
            $upload['allowed_types'] = 'gif|jpg|png';

            $files = $_FILES;
            $count = count($_FILES['userfile']['name']);

            for($i = 0; $i < $count; $i++) {
            $_FILES['userfile']['name']= $files['userfile']['name'][$i];
            $_FILES['userfile']['type']= $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error']= $files['userfile']['error'][$i];
            $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

            
            $this->load->library('upload', $upload);
            if (!is_dir('assets/uploads/'.$id)) {
                mkdir('./assets/uploads/'.$id, 0777, true);
            }
            $this->upload->do_upload();
            }

            $this->session->set_flashdata('success', 'Data Berhasil Diupdate..');
            redirect(base_url().'admin/edit_data/'.$id);
        }else{
            $this->session->set_flashdata('error', 'Data Gagal Diupdate');
            redirect(base_url().'admin/edit_data/'.$id);
        }
    }

    public function hapus($id)
    {
        $where = array(
			'id_masjid' => $id
		);

		$this->data_model->delete_data($where,'data_masjid');

        $this->session->set_flashdata('success', 'Data Berhasil Dihapus..');
		redirect(base_url().'admin/datamasjid');
    }
}