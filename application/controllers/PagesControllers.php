<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PagesControllers extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }


    // ================= Static Pages ================= //
    public function aboutus() {
        $this->load->view('pages/aboutus');
    }

    public function allcourse() {
        $this->load->view('pages/allcourse');
    }

    public function blog() {
        $this->load->view('pages/blog');
    }

    public function contactus() {
        $this->load->view('pages/contactus');
    }

    public function developer() {
        $this->load->view('pages/developer');
    }

    public function event() {
        $this->load->view('pages/event');
    }

    public function gallery() {
        $this->load->view('pages/gallery');
    }

    public function instructor() {
        $this->load->view('pages/instructor');
    }

    public function joinNow() {
        $this->load->view('pages/joinNow');
    }

    public function organizer() {
        $this->load->view('pages/organizer');
    }

    public function page_not_found()
    {
        $this->load->view('pages/page_not_found');
    }

    public function result() {
        $this->load->view('pages/result');
    }

    // ================= Courses ================= //
    public function course_one() {
        $this->load->view('pages/course_one');
    }

    public function course_two() {
        $this->load->view('pages/course_two');
    }

    public function course_three() {
        $this->load->view('pages/course_three');
    }

    public function course_four() {
        $this->load->view('pages/course_four');
    }

    public function course_five() {
        $this->load->view('pages/course_five');
    }

    public function course_six() {
        $this->load->view('pages/course_six');
    }

    public function course_seven() {
        $this->load->view('pages/course_seven');
    }

    public function course_eight() {
        $this->load->view('pages/course_eight');
    }

    public function course_nine() {
        $this->load->view('pages/course_nine');
    }
}
