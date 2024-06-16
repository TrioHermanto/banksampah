<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('petugas/index', $data);
    }

    public function account()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('petugas/account', $data);
    }

    public function editProfile()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('ttl', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('petugas/editProfile', $data);
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
            redirect('petugas/editProfile');
        }
    }
}
