<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

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
        $data['none'] = '';
        $this->load->template('dashboard',$data);
    }
    
    public function manageDevices()
    {
        $this->load->model('Settings_model');
        $data['devices'] = $this->Settings_model->get_devices();
        $this->load->template('manage_devices',$data);
    }
    
    public function add_device()
    {
        $this->load->model('Settings_model');
        $devicePostdata = array(
            'deviceMake' => $_POST['make'],
            'deviceModel' => $_POST['model']
        );
        $imeis = $this->Settings_model->add_device($devicePostdata);
        notify_add('Successfully Added Device');
        redirect('Settings/manageDevices/');
    }
    
    public function manageSalesConsultants()
    {
        $this->load->model('Users_model');
        $data['salespersons'] = $this->Users_model->get_users(1);
        $this->load->template('manage_salespersons',$data);
    }
    
    public function addSalesConsultant()
    {
        $this->load->model('Users_model');
        $devicePostdata = array(
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'email_address' => $_POST['email'],
            'company' => 0,
            'capabilities' => 1,
            'active' => 1,
            'date_created' => date('Y-m-d H:i:s'),
            'password' => md5($_POST['password'])
        );
        $this->Users_model->add_user($devicePostdata);
        $this->send_email($_POST['email'], $_POST['password'], $_POST['email']);
        notify_add('Successfully Added Sales Consultant');
        redirect('Settings/manageSalesConsultants/');
    }
    
    public function deleteSalesConsultant() {
        $this->load->model('Users_model');
        $userid = $_POST['userId'];
        $data = array('active' => 0);
        $this->Users_model->update_user_prop($data,$userid);
        echo $userid;
        die();
    }
    
    public function manageTechnicians()
    {
        $this->load->model('Users_model');
        $data['technicians'] = $this->Users_model->get_users(2);
        $this->load->template('manage_technicians',$data);
    }
    
    public function addTechnician()
    {
        $this->load->model('Users_model');
        $devicePostdata = array(
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'email_address' => $_POST['email'],
            'company' => $_POST['company'],
            'capabilities' => 2,
            'active' => 1,
            'date_created' => date('Y-m-d H:i:s'),
            'password' => md5($_POST['password'])
        );
        $this->Users_model->add_user($devicePostdata);
        $this->send_email($_POST['email'], $_POST['password'], $_POST['email']);
        notify_add('Successfully Added Technician');
        redirect('Settings/manageTechnicians/');
    }
    
    public function deleteTechnicianConsultant() {
        $this->load->model('Users_model');
        $userid = $_POST['userId'];
        $data = array('active' => 0);
        $this->Users_model->update_user_prop($data,$userid);
        echo $userid;
        die();
    }
    
    public function generalSettings()
    {
        $this->load->model('Settings_model');
        $settings = $this->Settings_model->getSettings();
        $data = array();
        foreach($settings as $setting){
            $data['set'][$setting->settingKey] = $setting->settingValue;
        }
        $this->load->template('general_setting',$data);
    }
    
    public function save_settings()
    {
        $this->load->model('Settings_model');
        
        //go through items
        $deviceData = array();
        parse_str($_POST['formData'],$settingsData);
        print_r($settingsData);
        foreach($settingsData as $setting => $settingVal){
            if($this->Settings_model->checkIfExists($setting)){
                $this->Settings_model->update_setting($setting, $settingVal);
                echo $setting.' update';
            } else {
                $this->Settings_model->add_setting($setting, $settingVal);
                echo $setting.' insert';
            }
        }
    }
    
    function send_email($username, $password, $email)
    {
        $data['username'] = $username;
        $data['password'] = $password;
        $emailbody = $this->load->view('emails/email_template',$data,true);
        
        $this->load->library('email');
        
        $config['mailtype'] = 'html';

        $this->email->initialize($config);

        $this->email->from('noreply@digibit.biz', 'Tiketi System');
        $this->email->to($email);
        //$this->email->bcc('janes@digibit.co.za');

        $this->email->subject('you have been added as a user on Tiketi');
        $this->email->message($emailbody);

        $this->email->send();
        
    }
    
    function preview_email()
    {
        $data['username'] = 'John Doe';
        $data['password'] = '******';
        $this->load->view('emails/email_template',$data);
        
    }
    
}
