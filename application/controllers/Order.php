<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Orderan Masuk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['order_masuk'] = $this->db->get('order_masuk')->result_array();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('order/index', $data);
        $this->load->view('templates/footer');
    }

    public function orderAktif()
    {
        $data['title'] = 'Orderan Aktif';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function hapusOrder($id)
    {
        $this->load->model('ModelOrder');
        $hapus = $this->ModelOrder->hapus($id);

        $this->session->set_flashdata('flash', 'dihapus');
        redirect('order');
    }

    public function lanjutorder($id)
    {
        $this->load->model('ModelOrder', TRUE);
        $this->ModelOrder->lanjut($id);
        redirect('order');
    }
}
