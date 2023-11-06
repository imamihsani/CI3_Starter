<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tables extends CI_Controller
{
    public function index()
    {
        $this->load->view('_partials/dashboard/v_head');
        $this->load->view('_partials/dashboard/v_sidebar');
        $this->load->view('_partials/dashboard/v_topbar');
        $this->load->view('v_tables');
        $this->load->view('_partials/dashboard/v_footer');
    }
}
