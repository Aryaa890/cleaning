<?php

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/home_header');
        $this->load->view('home/index');
        $this->load->view('templates/home_footer');
    }

    public function order()
    {
        $data = [
            'tanggal' => $this->input->post('tanggal'),
            'nama' => $this->input->post('nama'),
            'no_handphone' => $this->input->post('no_handphone'),
            'alamat' => $this->input->post('alamat'),
            'komen' => $this->input->post('komen')
        ];

        $this->db->insert('order_masuk', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil ditambahkan</div>');
        redirect('home');
    }
}
