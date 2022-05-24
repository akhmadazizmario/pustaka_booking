<?php
defined('BASEPATH') or exit('No Direct script access allowed');
class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function laporan_buku()
    {
        $data['judul'] = 'Laporan Data Buku';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['buku'] = $this->ModelBuku->getBuku()->result_array();
        $data['kategori'] = $this->ModelBuku->getKategori()->result_array();
        $this->load->view('templates1/header', $data);
        $this->load->view('templates1/sidebar', $data);
        $this->load->view('templates1/topbar', $data);
        $this->load->view('buku/laporan_buku', $data);
        $this->load->view('templates1/footer');
    }
    public function cetak_laporan_buku()
    {
        $data['buku'] = $this->ModelBuku->getBuku()->result_array();
        $data['kategori'] = $this->ModelBuku->getKategori()->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('buku/laporan_print_buku', $data);
        } else {

            $data = [
                'judul_buku' => $this->input->post('judul_buku', true),
                'id_kategori' => $this->input->post('id_kategori', true),
                'pengarang' => $this->input->post('pengarang', true),
                'penerbit' => $this->input->post('penerbit', true),
                'tahun_terbit' => $this->input->post('tahun', true),
                'isbn' => $this->input->post('isbn', true),
                'stok' => $this->input->post('stok', true),
            ];

            $this->ModelBuku->simpanBuku($data);
            redirect('laporan');
        }
    }
    public function laporan_buku_pdf()
    {
        $data['buku'] = $this->ModelBuku->getBuku()->result_array();
        $this->db->get('buku')->result();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "Laporan-Dompdf-Codeigniter.pdf";
        $this->pdf->load_view('buku/laporan_pdf_buku', $data);
    }
    public function export_excel_pinjam()
    {
        $data['buku'] = $this->ModelBuku->getBuku()->result_array();
        $this->db->get('buku')->result();
        $this->load->view('pinjam/export-excel-pinjam', $data);
    }
}
