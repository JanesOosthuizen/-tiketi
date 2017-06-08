<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobcard extends CI_Controller {

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
    
    public function viewJobcards()
    {
        $this->load->model('Jobcards_model');
        $data['jobcards'] = $this->Jobcards_model->get_jobcards();
        $this->load->template('viewJobcards',$data);
    }
    
    public function viewJobcard()
    {
        $jobcard = $this->uri->segment(3);
        $this->load->model('Settings_model');
        $this->load->model('Jobcards_model');
        $this->load->model('Users_model');
        $modaldata['user'] = $this->session->userdata();
        $modaldata['devices'] = $this->Settings_model->get_devices();
        $modaldata['technicians'] = $this->Users_model->get_users(2);
        $modaldata['jobcard'] = $jobcard;
        $data['idJobcards'] = $jobcard;
        $data['modal'] = $this->load->view('modals/jobcard_add_item',$modaldata,true);
        $data['Editmodal'] = $this->load->view('modals/jobcard_edit_item',$modaldata,true);
        $data['jobcard'] = $this->Jobcards_model->get_jobcard($jobcard);
        $data['jobcard_devices'] = $this->Jobcards_model->get_jobcard_devices($jobcard);
        $jobcardForms = $this->Jobcards_model->get_jobcard_device_forms($jobcard);
        $data['accessModal'] = $this->load->view('modals/access_details','',true);
        $this->load->template('viewJobcard',$data);
    }
    
    public function addJobcard()
    {
        $this->load->model('Settings_model');
        $this->load->model('Users_model');
        $data['lol'] = '';
        $modaldata['user'] = $this->session->userdata();
        $modaldata['devices'] = $this->Settings_model->get_devices();
        $modaldata['technicians'] = $this->Users_model->get_users(2);
        $data['modal'] = $this->load->view('modals/jobcard_add_item',$modaldata,true);
        $this->load->template('add_jobcard',$data);
    }
    
    public function addJobcardProccess()
    {
        $this->load->model('Jobcards_model');
        $jobcardPostdata = array(
            'customer' => $_POST['customerName'],
            'contactName' => $_POST['customerName'],
            'contactSurname' => $_POST['customerSurname'],
            'telephone' => $_POST['telephoneNumber'],
            'cellphone' => $_POST['cellphoneNumber'],
            'email' => $_POST['email'],
            'Idnr' => $_POST['IDnumber'],
            'jobcardStatus' => $_POST['jobcardStatus'],
            'remark' => $_POST['remark'],
            'dateCreated' => date('Y-m-d H:i:s'),
        );
        $jobcard = $this->Jobcards_model->add_jobcard($jobcardPostdata);
        notify_add('Successfully Added Jobcard');
        redirect('Jobcard/viewjobcard/'.$jobcard);
    }
    
    public function updateJobcardProccess()
    {
        $this->load->model('Jobcards_model');
        $jobcardPostdata = array(
            'customer' => $_POST['customer'],
            'contactName' => $_POST['contact-name'],
            'telephone' => $_POST['telephone-number'],
            'cellphone' => $_POST['cellphone-number'],
            'email' => $_POST['email'],
            'Idnr' => $_POST['IDnumber'],
            'jobcardStatus' => $_POST['jobcardStatus'],
            'remark' => $_POST['remark'],
            'dateUpdated' => date('Y-m-d H:i:s'),
        );
        if($_POST['jobcardStatus'] == 'completed'){
            $jobcardPostdata['dateCompleted'] = date('Y-m-d H:i:s');
        }
        $jobcard = $this->Jobcards_model->update_jobcard($jobcardPostdata,$_POST['jobCard']);
        notify_add('Successfully Updated Jobcard');
        redirect('Jobcard/viewjobcard/'.$_POST['jobCard']);
    }
    
    public function customerForm()
    {
        $this->load->model('Settings_model');
        $this->load->model('Jobcards_model');
        if($_REQUEST){
            
            $details = array(
                'jobCardID' => $_REQUEST['jobcard'],
                'securityCode' => $_REQUEST['securitycode'],
                'appleId' => $_REQUEST['appleid'],
                'password' => $_REQUEST['password'],
                'unlockpattern' => $_REQUEST['unlockPattern'],
                'signature' => $_REQUEST['signatureField'],
                'accessories' => json_encode($_REQUEST['accessories']),
                'jobcardDevice' => $_REQUEST['jobcardDevice']
            );
            
            $this->Jobcards_model->add_job_details($details);
            
            redirect(base_url().'index.php/Jobcard/viewjobcard/'.$_REQUEST['jobcard']);
        }
        $jobcard = $this->uri->segment(3);
        $data['jobcard'] = $jobcard;
        $data['jobcardDevice'] = $jobcard;
        $data['terms'] = $this->Settings_model->getSetting('termsandconditions');
        $this->load->template('customer_form',$data);
    }
    
    public function addJobcardItemProccess()
    {
        $this->load->model('Jobcards_model');
        $jobcardDevicePostdata = array(
            'salesperson' => $_POST['salesperson'],
            'technician' => $_POST['technician'],
            'device' => $_POST['device'],
            'serialnr' => $_POST['serial'],
            'warranty' => $_POST['type'],
            'faultDescription' => $_POST['description'],
            'assignedTo' => $_POST['technician'],
            'jobcard' => $_POST['jobcard']
        );
        $jobcard = $this->Jobcards_model->add_jobcard_device($jobcardDevicePostdata);
        notify_add('Successfully Added Device');
        redirect('Jobcard/viewjobcard/'.$_POST['jobcard']);
    }
    
    public function editJobcardItemProccess()
    {
        $this->load->model('Jobcards_model');
        $jobcardDevicePostdata = array(
            'salesperson' => $_POST['salesperson'],
            'technician' => $_POST['technician'],
            'device' => $_POST['device'],
            'serialnr' => $_POST['serial'],
            'warranty' => $_POST['type'],
            'faultDescription' => $_POST['description'],
            'assignedTo' => $_POST['technician'],
            'deviceStatus' => $_POST['deviceStatus'],
            'jobcard' => $_POST['jobcard']
        );
        $jobcard = $this->Jobcards_model->update_jobcard_device($jobcardDevicePostdata,$_POST['deviceId']);
        notify_add('Successfully Updated Device');
        redirect('Jobcard/viewjobcard/'.$_POST['jobcard']);
    }
    
    /* AJAX Function */
    
    public function edit_device()
    {
        $this->load->model('Jobcards_model');
        $device = $_POST['deviceId'];
        $deviceData = $this->Jobcards_model->get_jobcard_device($device);
        echo json_encode($deviceData[0]);
    }
    
    public function get_access_details()
    {
        $this->load->model('Jobcards_model');
        $device = $_POST['deviceId'];
        $deviceData = $this->Jobcards_model->get_jobcard_device_access_details($device);
        $deviceDetails =  (array) $deviceData[0];
        $accessData = $this->load->view('modals/part_access_details',$deviceDetails,true);
        echo json_encode(array('html' => $accessData, 'unlockpattern' => $deviceDetails['unlockpattern']));
    }
    
}
