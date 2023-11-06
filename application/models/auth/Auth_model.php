<?php
class Auth_model extends CI_Model
{
    private $_table = "tabel_user";

    public function __construct()
    {
        parent::__construct();
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    function register($id, $username, $password, $nama, $role, $nip)
    {
        $data_user = array(
            'id' => $id,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'nama' => $nama,
            'role' => $role,
            'nip' => $nip
        );
        $this->db->insert('tabel_user', $data_user);
    }
    function login_user($username, $password)
    {
        $query = $this->db->get_where('tabel_user', array('username' => $username));
        if ($query->num_rows() > 0) {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('id', $data_user->id);
                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('nama', $data_user->nama);
                $this->session->set_userdata('role', $data_user->role);
                $this->session->set_userdata('nip', $data_user->nip);
                $this->session->set_userdata('is_login', TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    function cek_login()
    {
        if (empty($this->session->userdata('is_login'))) {
            redirect('auth/login');
        }
    }
}
