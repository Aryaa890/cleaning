<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('ModelUser');
        $this->load->model('ModelOrder');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_user'] = $this->db->get('user')->result_array();
        $data['order_masuk'] = $this->db->get('order_masuk')->result_array();
        $data['count'] = $this->ModelOrder->get_count();
        $data['count'] = $this->ModelOrder->get_pending_count();
        $data['count'] = $this->ModelOrder->get_diambil_count();
        $data['count'] = $this->ModelOrder->get_laporan_count();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function data_user()
    {
        $data['title'] = 'Data User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['data_user'] = $this->db->get('user')->result_array();
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/data_user', $data);
            $this->load->view('admin/modal_user', $data);
            $this->load->view('templates/footer');
        } else {
            $config['upload_path']          = './assets/images/userProfile/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10240;
            $config['max_width']            = 10240;
            $config['max_height']           = 10240;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image')) {
                echo $this->upload->display_errors();
            } else {
                $image = $this->upload->data();
                $image = $image['file_name'];

                $dataUser = [
                    'nama' => $this->input->post('nama'),
                    'email' => $this->input->post('email'),
                    'image' => $image,
                    'password' => $this->input->post('password'),
                    'role_id' => 1,
                    'is_active' => 1
                ];

                $this->ModelUser->tambahUser($dataUser);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil menambahkan user </div>');
                redirect('admin/data_user');
            }
        }
    }

    public function deleteUser($id)
    {
        $this->ModelUser->deleteUser($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil menghapus user </div>');
        redirect('admin/data_user');
    }
}
