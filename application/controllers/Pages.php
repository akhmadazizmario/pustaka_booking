<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    function fakultas()
    {
        $data['judul'] = 'Fakultas';
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['user'] = $user['nama'];
            $this->load->view('templates1/templates-user/header', $data);
            $this->load->view('pages/fakultas', $data);
            $this->load->view('templates1/templates-user/footer', $data);
        } else {
            $data['user'] = 'Pengunjung';
            $this->load->view('templates1/templates-user/header', $data);
            $this->load->view('pages/fakultas', $data);
            $this->load->view('templates1/templates-user/footer', $data);
        }
    }
    function calender()
    {
        $data['judul'] = 'Fakultas';
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['user'] = $user['nama'];
            $this->load->view('templates1/templates-user/header', $data);
            $this->load->view('pages/kalender', $data);
            $this->load->view('templates1/templates-user/footer', $data);
        } else {
            $data['user'] = 'Pengunjung';
            $this->load->view('templates1/templates-user/header', $data);
            $this->load->view('pages/kalender', $data);
            $this->load->view('templates1/templates-user/footer', $data);
        }
    }
    function fasilitas()
    {
        $data['judul'] = 'Fasilitas';
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['user'] = $user['nama'];
            $this->load->view('templates1/templates-user/header', $data);
            $this->load->view('pages/fasilitas', $data);
            $this->load->view('templates1/templates-user/footer', $data);
        } else {
            $data['user'] = 'Pengunjung';
            $this->load->view('templates1/templates-user/header', $data);
            $this->load->view('pages/fasilitas', $data);
            $this->load->view('templates1/templates-user/footer', $data);
        }
    }
    function video()
    {
        $data['judul'] = 'video materi';
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['user'] = $user['nama'];
            $this->load->view('templates1/templates-user/header', $data);
            $this->load->view('pages/videomateri', $data);
            $this->load->view('templates1/templates-user/footer', $data);
        } else {
            $data['user'] = 'Pengunjung';
            $this->load->view('templates1/templates-user/header', $data);
            $this->load->view('pages/videomateri', $data);
            $this->load->view('templates1/templates-user/footer', $data);
        }
    }
    function syarat()
    {
        $data['judul'] = 'video materi';
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['user'] = $user['nama'];
            $this->load->view('templates1/templates-user/header', $data);
            $this->load->view('pages/persyaratan', $data);
            $this->load->view('templates1/templates-user/footer', $data);
        } else {
            $data['user'] = 'Pengunjung';
            $this->load->view('templates1/templates-user/header', $data);
            $this->load->view('pages/persyaratan', $data);
            $this->load->view('templates1/templates-user/footer', $data);
        }
    }
    function pengumuman()
    {
        $data['judul'] = 'pengumuman';
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['user'] = $user['nama'];
            $this->load->view('templates1/templates-user/header', $data);
            $this->load->view('pages/pengumuman', $data);
            $this->load->view('templates1/templates-user/footer', $data);
        } else {
            $data['user'] = 'Pengunjung';
            $this->load->view('templates1/templates-user/header', $data);
            $this->load->view('pages/pengumuman', $data);
            $this->load->view('templates1/templates-user/footer', $data);
        }
    }
    function scan()
    {
        $data['judul'] = 'pengumuman';
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['user'] = $user['nama'];
            $this->load->view('templates1/templates-user/header', $data);
            $this->load->view('pages/scanqr', $data);
            $this->load->view('templates1/templates-user/footer', $data);
        } else {
            $data['user'] = 'Pengunjung';
            $this->load->view('templates1/templates-user/header', $data);
            $this->load->view('pages/scanqr', $data);
            $this->load->view('templates1/templates-user/footer', $data);
        }
    }
    function blog()
    {
        $data['judul'] = 'blog';
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['user'] = $user['nama'];
            $this->load->view('templates1/templates-user/header', $data);
            $this->load->view('pages/blog', $data);
            $this->load->view('templates1/templates-user/footer', $data);
        } else {
            $data['user'] = 'Pengunjung';
            $this->load->view('templates1/templates-user/header', $data);
            $this->load->view('pages/blog', $data);
            $this->load->view('templates1/templates-user/footer', $data);
        }
    }
}
