<?php
class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array())
    {
        $CBse =& get_instance();
        $data['page_title'] = "Jobcard System";
        $session_data = $CBse->session->userdata('logged_in');
        if(!$CBse->session->userdata('logged_in'))
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
        $menudata['user'] = $CBse->session->userdata('username');
        $data['userdata'] = $CBse->session->userdata();
        
        $footerdata['notifs'] = $CBse->session->flashdata('notify');
        
        $this->view('global/header',$data);
        $this->view('global/sideMenu');
        $this->view('global/menu',$menudata);
        $this->view($template_name,$vars);
        $this->view('global/footer',$footerdata);
        
    }
}