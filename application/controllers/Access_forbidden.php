<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Access_forbidden extends CI_Controller
{
    public function index()
    {
        $data['title_page'] = "403 Access Forbidden";

        $this->load->view('_partials/dashboard/v_head', $data);
        $this->load->view('_partials/dashboard/v_sidebar', $data);
        $this->load->view('_partials/dashboard/v_topbar', $data);
        $this->load->view('v_403.php', $data);
        $this->load->view('_partials/dashboard/v_footer');
    }
}
