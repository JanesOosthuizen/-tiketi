<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

    public function index()
    {
        $data['none'] = '';
        $this->load->template('reports',$data);
    }
    
}
