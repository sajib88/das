<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('global_model');
        $this->load->helper('global');
        $this->load->helper("url");
        $this->load->library("pagination");
    }



    public function index()
    {
        $this->load->view('dashborad');
    }


}
