<?php

use Dompdf\Dompdf;

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load the model
        $this->load->model('ModelLaporan');
    }

    public function index()
    {
        $data['title'] = 'Laporan Penghasilan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['laporan'] = $this->db->get('laporan')->result_array();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer');
    }

    public function generatePdf()
    {
        // Fetch data for the table
        $laporan = $this->db->get('laporan')->result_array();

        // Create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Table to PDF');
        $pdf->SetSubject('Table Export');
        $pdf->SetKeywords('TCPDF, PDF, table');

        // Set default header data
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' - Table Export', PDF_HEADER_STRING);

        // Set header and footer fonts
        $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // Set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // Set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // Set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // Set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // Add a page
        $pdf->AddPage();

        // Set font
        $pdf->SetFont('helvetica', '', 10);

        // Table data
        $html = '
            <table border="1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Pemesan</th>
                        <th>Tanggal Order</th>
                        <th>Nama Pekerja</th>
                        <th>Harga layanan</th>
                    </tr>
                </thead>
                <tbody>
        ';

        foreach ($laporan as $key => $l) {
            $html .= '
                <tr>
                    <td>' . ($key + 1) . '</td>
                    <td>' . $l['nama'] . '</td>
                    <td>' . $l['tanggal'] . '</td>
                    <td>' . $l['nama_pekerja'] . '</td>
                    <td>Rp ' . number_format($l['id_layanan']) . '</td>
                </tr>
            ';
        }

        $html .= '
                </tbody>
            </table>
        ';

        // Output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        // Close and output PDF document
        $pdf->Output('table_export.pdf', 'I');
    }
}
