<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //load model login_model
        $this->load->model('auth/auth_model');
        $this->auth_model->cek_login();
    }
    public function index()
    {
        $data['title_page'] = "Dashboard";
     
        $this->load->view('_partials/dashboard/v_head', $data);
        $this->load->view('_partials/dashboard/v_sidebar', $data);
        $this->load->view('_partials/dashboard/v_topbar', $data); 
        $this->load->view('v_dashboard', $data);
        $this->load->view('_partials/dashboard/v_footer');
    }
}
