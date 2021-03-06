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
        $data['list_charges'] = $this->db->get('tempat_charge')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('bus/booking', $data);
    }

    public function detail()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['name'] = $this->session->userdata('name');
        $data['title'] = 'Booking';
        $data['role_id'] = $this->session->userdata('role_id');
        $this->load->view('templates/header', $data);
        $this->load->view('bus/booking-detail', $data);
    }
}