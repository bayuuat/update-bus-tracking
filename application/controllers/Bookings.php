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
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['name'] = $this->session->userdata('name');
        $data['title'] = 'Booking';
        $data['role_id'] = $this->session->userdata('role_id');
        $this->load->model('M_booking');
        $data['list_charges'] = $this->M_booking->get_data();
        $this->load->view('templates/header', $data);
        $this->load->view('bus/booking', $data);
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
    }
}