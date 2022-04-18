<?php
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = [
            'judul' => "Katalog Buku",
            'buku' => $this->ModelBuku->getBuku()->result(),
        ];
        //jika sudah login dan jika belum login
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['user'] = $user['nama'];
            $this->load->view('templates1/templates-user/header', $data);
            $this->load->view('buku/daftarbuku', $data);
            $this->load->view('templates1/templates-user/modal');
            $this->load->view('templates1/templates-user/footer', $data);
        } else {
            $data['user'] = 'Pengunjung';
            $this->load->view('templates1/templates-user/header', $data);
            $this->load->view('buku/daftarbuku', $data);
            $this->load->view('templates1/templates-user/modal');
            $this->load->view('templates1/templates-user/footer', $data);
        }
    }

    public function detailBuku()
    {
        $id = $this->uri->segment(3);
        $buku = $this->ModelBuku->joinKategoriBuku(['buku.id' => $id])->result();
        $data['user'] = "Pengunjung";
        $data['title'] = "Detail Buku";
        foreach ($buku as $fields) {
            $data['judul'] = $fields->judul_buku;
            $data['pengarang'] = $fields->pengarang;
            $data['penerbit'] = $fields->penerbit;
            $data['kategori'] = $fields->kategori;
            $data['tahun'] = $fields->tahun_terbit;
            $data['isbn'] = $fields->isbn;
            $data['gambar'] = $fields->image;
            $data['dipinjam'] = $fields->dipinjam;
            $data['dibooking'] = $fields->dibooking;
            $data['stok'] = $fields->stok;
            $data['id'] = $id;
        }
        $this->load->view('templates1/templates-user/header', $data);
        $this->load->view('buku/detail-buku', $data);
        $this->load->view('templates1/templates-user/modal');
        $this->load->view('templates1/templates-user/footer');
    }

    public function daftar()
    {
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', ['required' => 'Nama Belum diis!!']);
        $this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required', ['required' => 'Alamat Belum diis!!']);
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email|is_unique[user.email]', ['valid_email' => 'Email Tidak Benar!!', 'required' => 'Email Belum diisi!!', 'is_unique' => 'Email Sudah Terdaftar!']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', ['matches' => 'Password Tidak Sama!!', 'min_length' => 'Password Terlalu Pendek']);
        $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password1]');
        $email = $this->input->post('email', true);
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'alamat' => $this->input->post('alamat', true),
            'email' => htmlspecialchars($email),
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'is_active' => 1,
            'tanggal_input' => time()
        ];
        $this->ModelUser->simpanData($data);
        $this->session->set_flashdata('pesan', '<div class="alert alertsuccess alertmessage" role="alert">Selamat!! akun anggota anda sudah dibuat.</div>');
        redirect(base_url());
    }
}
