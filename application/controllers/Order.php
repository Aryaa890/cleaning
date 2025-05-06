<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        // Load necessary libraries and models
        $this->load->model('ModelOrder');
    }

    public function index()
    {
        $data['title'] = 'Orderan Masuk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['order_masuk'] = $this->ModelOrder->getAllOrders();
        $data['layanan'] = $this->db->get('layanan')->result_array();

        // Flash message
        $data['flash_message'] = $this->session->flashdata('message');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('order/index', $data);
        $this->load->view('templates/footer');
    }

    public function ubahOrder()
    {
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $no_handphone = $this->input->post('no_handphone');
            $alamat = $this->input->post('alamat');
            $tanggal = $this->input->post('tanggal');
            $komen = $this->input->post('komen');
            $id_layanan = $this->input->post('id_layanan');

            // Create an array of data to update
            $data = array(
                'nama' => $nama,
                'no_handphone' => $no_handphone,
                'alamat' => $alamat,
                'tanggal' => $tanggal,
                'komen' => $komen,
                'id_layanan' => $id_layanan
            );

            // Call the model method to update the record
            $this->ModelOrder->updateOrder($id, $data);

            // Redirect or do something else after update
            redirect('order');
        }
    }

    public function hapusOrder($id)
    {
        $this->ModelOrder->deleteOrder($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil menghapus order </div>');
        redirect('order');
    }

    public function lanjutorder($id)
    {
        $this->load->model('ModelOrder', TRUE);
        $this->ModelOrder->lanjut($id);
        redirect('order');
    }
}
