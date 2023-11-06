<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth/auth_model');
    }

    public function index()
    {
        $data['title_page'] = "Login";

        if ($this->session->userdata('is_login') != TRUE) {
            $this->load->view('_partials/login/v_head', $data);
            $this->load->view('auth/v_login', $data);
            $this->load->view('_partials/login/v_footer');
        } else {
            $url = base_url('dashboard');
            redirect($url);
        };
    }

    public function proses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($this->auth_model->login_user($username, $password)) {
            $cek_username = $this->db->get_where('tabel_user',['username' => $this->input->post('username', true)])->row();
            if($cek_username){
                if (password_verify($this->input->post('password'), $cek_username->password)){
                    $session_user = [
                        'id' => $cek_username->id
                    ];
                    $this->session->set_userdata($session_user);
                    redirect('dashboard');
                }
            }
            
        } else {
            $this->session->set_flashdata('error', 'Username & Password salah');
            redirect('auth/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('is_login');
        redirect('auth/login');
    }
}
