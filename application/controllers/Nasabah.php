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

    public function editprofile()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/nasabah_header');
        $this->load->view('nasabah/editprofile', $data);
        $this->load->view('templates/nasabah_footer');
    }
}
