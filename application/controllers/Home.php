<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelHome');
    }
    public function index()
    {
        // Fetch data from the 'layanan' table
        $this->load->model('ModelHome');
        // Fetch data from the 'layanan' table
        $data['layanans'] = $this->ModelHome->get_all_layanan();

        // Load views and pass the data
        $this->load->view('templates/home_header');
        $this->load->view('home/index', $data); // Pass $data to the index view
        $this->load->view('templates/home_footer', $data); // Pass $data to the footer view
    }

    public function order()
    {
        $data = [
            'tanggal' => $this->input->post('tanggal'),
            'id_layanan' => $this->input->post('id_layanan'),
            'nama' => $this->input->post('nama'),
            'no_handphone' => $this->input->post('no_handphone'),
            'alamat' => $this->input->post('alamat'),
            'komen' => $this->input->post('komen')
        ];

        $this->db->insert('order_masuk', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil ditambahkan</div>');

        // Set the content type to application/json
        header('Content-Type: application/json');
        // Return a JSON response
        echo json_encode(['status' => 'success', 'message' => 'Order successfully added']);
    }
}
