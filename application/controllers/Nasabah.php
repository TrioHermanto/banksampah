<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nasabah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/nasabah_header');
        $this->load->view('nasabah/index', $data);
        $this->load->view('templates/nasabah_footer');
    }

    public function account()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/nasabah_header');
        $this->load->view('nasabah/account', $data);
        $this->load->view('templates/nasabah_footer');
    }

    public function editProfile()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('ttl', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/nasabah_header');
            $this->load->view('nasabah/editProfile', $data);
            $this->load->view('templates/nasabah_footer');
        } else {
            $email = $this->input->post('email');
            $name = $this->input->post('name');
            $jk = $this->input->post('jk');
            $ttl = $this->input->post('ttl');
            $alamat = $this->input->post('alamat');

            // cek jika ada gambar
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $data = array(
                'email' => $email,
                'name' => $name,
                'jk' => $jk,
                'ttl' => $ttl,
                'alamat' => $alamat
            );

            $where = array(
                'email' => $email
            );
            $this->m_data->update_data($where, $data, 'user');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile berhasil diupdate!</div>');
            redirect('nasabah/editProfile');
        }
    }

    public function ubahpasswordnasabah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('password_lama', 'Password Lama', 'required|trim', [
            'required' => 'Kolom harus diisi, tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('password_baru1', 'Password Baru', 'required|trim|min_length[8]|matches[password_baru2]', [
            'required' => 'Kolom harus diisi, tidak boleh kosong!',
            'min_length' => 'Password minimal 8 charakter!',
            'matches' => 'Password tidak sama!'
        ]);
        $this->form_validation->set_rules('password_baru2', 'Konfirmasi Password Baru', 'required|trim|min_length[8]|matches[password_baru1]', [
            'required' => 'Kolom harus diisi, tidak boleh kosong!',
            'matches' => 'Password tidak sama!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('nasabah/ubahpasswordnasabah', $data);
        } else {
            $password_lama = $this->input->post('password_lama');
            $password_baru = $this->input->post('password_baru1');
            if (!password_verify($password_lama, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama salah!</div>');
                redirect('nasabah/ubahpasswordnasabah');
            } else {
                if ($password_lama == $password_baru) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan password lama!</div>');
                    redirect('nasabah/ubahpasswordnasabah');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

                    $data = array(
                        'password' => $password_hash
                    );
                    $where = array(
                        'email' => $this->session->userdata('email')
                    );
                    $this->m_data->update_data($where, $data, 'user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diperbarui!</div>');
                    redirect('nasabah/ubahpasswordnasabah');
                }
            }
        }
    }
}
