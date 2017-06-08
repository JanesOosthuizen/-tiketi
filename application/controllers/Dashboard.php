<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->model('Jobcards_model');
        $data['data']['totalJobs'] = $this->Jobcards_model->get_jobcard_count('');
        $data['data']['totalOpenJobs'] = $this->Jobcards_model->get_jobcard_count('open');
        $data['data']['totalOpenDevices'] = $this->Jobcards_model->get_total_devices_open();
        $data['data']['totalDevices'] = $this->Jobcards_model->get_total_devices();
        $data['data']['Jobcards'] = $this->Jobcards_model->get_jobcards(5,'open');
        $data['data']['DelayedJobcards'] = $this->Jobcards_model->get_delayed_jobcards(5);
        $data = (array) $data;
        $this->load->template('dashboard',$data);
    }
    
    public function template()
    {
        $this->load->template('template');
    }
    
}
