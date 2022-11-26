<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        date_default_timezone_set("Asia/Jakarta");
        $this->load->model('m_auth');
    }
    public function index()
    {
        $this->load->view('auth/login');
    }

    public function register()
    {
        if ($_POST) {
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
            $this->form_validation->set_rules('full_name', 'Full Name', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]', [
                'matches' => "The Password doesn't match"
            ]);
            if ($this->form_validation->run() == false) {
                $this->load->view('auth/register');
            } else {
                $data = array(
                    'name'          => $this->input->post('full_name'),
                    'email'         => $this->input->post('email'),
                    'image'         => 'default.jpg',
                    'password'      => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'role_id'       => '2',
                    'is_active'     => '1',
                    'date_created'  => date("Y-m-d H:i:s")
                );

                $inserted = $this->m_auth->insert_user($data);
                if ($inserted) {
                    redirect('auth');
                }
            }
        } else {
            $this->load->view('auth/register');
        }
    }
}
