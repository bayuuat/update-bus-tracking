<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bookings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect(base_url('auth'));
        } elseif ($this->session->userdata('role_id') != 1) {
            redirect(base_url('home'));
        };
        $this->load->model('M_booking');
        $this->load->library('session');
    }
    public function index()
    {
        $data['abc'] = '';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['name'] = $this->session->userdata('name');
        $data['title'] = 'Booking';
        $data['role_id'] = $this->session->userdata('role_id');
        $this->load->model('M_booking');
        $data['list_charges'] = $this->M_booking->get_data();
        $this->load->view('templates/header', $data);
        $this->load->view('bus/booking', $data);
        $this->load->view('templates/auth-footer', $data); //Untuk ambil js nya bootstrap
    }

    public function detail($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['name'] = $this->session->userdata('name');
        $data['title'] = 'Booking';
        $data['role_id'] = $this->session->userdata('role_id');
        $this->load->model('M_booking');
        $detail = $this->M_booking->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header', $data);
        $this->load->view('bus/booking-detail', $data);
        $this->load->view('templates/auth-footer', $data); //Untuk ambil js nya bootstrap
    }

    public function create($id_station)
    {
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('jam_mulai', 'Jam_mulai', 'required');
        $this->form_validation->set_rules('jam_selesai', 'Jam_selesai', 'required');

        $id_bus = $this->session->userdata('id');
        if ($this->form_validation->run()) {
            $data_booking = [
                'id_bus' => $id_bus,
                'id_station' => $id_station,
                'tanggal' => $this->input->post('tanggal'),
                'jam_mulai' => $this->input->post('jam_mulai'),
                'jam_selesai' => $this->input->post('jam_selesai')
            ];
            $this->M_booking->create('bookings', $data_booking);
            $this->session->set_tempdata('success_booking', '<div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
            <strong>Booking Success!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>', 2);
            $abc = 'show';
        } else {
            $this->session->set_tempdata('success_booking', '<div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Incomplete data entered</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>', 2);
        }

        redirect(base_url('bookings'));
    }

    public function getDataBook($tanggal)
    {
        $query = "SELECT * FROM bookings WHERE tanggal = '$tanggal'";
        $data = $this->db->query($query)->result_array();

        echo json_encode($data);
    }
}
