<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth/auth_model');
    }

    public function index()
    {
        $this->data["user"] = $this->auth_model->getAll();
        $data['title_page'] = "Register";

        if ($this->session->userdata('is_login') != FALSE) {
            $this->load->view('_partials/login/v_head', $data);
            $this->load->view('auth/v_register', $data);
            $this->load->view('_partials/login/v_footer');
        } else {
            $url = base_url('dashboard');
            redirect($url);
        };
    }
    public function proses()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[1]|max_length[255]|is_unique[tabel_user.username]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('id');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama = $this->input->post('nama');
            $role = $this->input->post('role');
            $nip = $this->input->post('nip');
            $this->auth_model->register($id, $username, $password, $nama, $role, $nip);
            $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('auth/register');
        }
    }
}
