<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeveloperController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    
    // ================= Dashboard Pages ================= //
    public function developerDashboard() {
        $this->load->view('developer/developerDashboard');
    }

    public function developerProfile() {
        $this->load->view('developer/developerdasbProfile');
    }

    public function developerSetting() {
        $this->load->view('developer/developerdasbSetting');
    }

    public function createAdmin() {
        $this->load->view('developer/createAdmin');
    }

    // ================= Auth ================= //
    public function developerAuth()
    {
        $this->load->model('Developer_Model');
        $this->Developer_Model->devLogin();
    }

    public function devLogout()
    {
        $this->load->model('Developer_Model');
        $this->Developer_Model->developerLogout();
    }

    // ================= Logout ================= //
    
}
