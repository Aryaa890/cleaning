<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order_pekerja extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelLaporan'); // Load the ModelLaporan model
    }

    public function index()
    {
        $data['title'] = 'Orderan Aktif';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['order_pending'] = $this->db->get('order_pending')->result_array();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('order_pekerja/index', $data);
        $this->load->view('templates/footer');
    }

    public function dikerjakan()
    {
        $data['title'] = 'Orderan Dikerjakan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['order_diambil'] = $this->db->get('order_diambil')->result_array();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('order_pekerja/dikerjakan', $data);
        $this->load->view('templates/footer');
    }

    public function laporan($id)
    {
        $this->load->model('ModelLaporan', TRUE);
        $this->ModelLaporan->laporan($id);
        redirect('order_pekerja/dikerjakan');
    }


    public function ambilOrder($id)
    {
        // Get additional data from POST request
        $additional_data = array(
            'nama_pekerja' => $this->input->post('nama_pekerja'),
            // Add more columns as needed
        );

        $this->load->model('ModelOrderPekerja', TRUE);
        // Pass additional data along with the ID to the model
        $this->ModelOrderPekerja->diambil($id, $additional_data);
        // Optionally, return a response if needed
        redirect('order_pekerja'); // Redirect to a success page or some other page
    }
}
