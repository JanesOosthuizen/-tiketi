<?php
class Jobcards_model extends CI_Model {

//        public $title;
//        public $content;
//        public $date;

    public function __construct()
    {
            // Call the CI_Model constructor
            parent::__construct();
    }
    
    public function get_jobcards($limit = 0, $status = '')
    {
        $this->db->select('*');
        $this->db->from('jobcards');
        if($status != ''){
            $this->db->where('jobcardStatus',$status);
        }
        $this->db->order_by('idJobcards', 'DESC');
        if($limit > 0){
            $this->db->limit($limit);
        }
        $result =  $this->db->get();
        return $result->result();
    }
    
    public function get_delayed_jobcards($limit = 0)
    {
        $this->db->select('*');
        $this->db->from('jobcards');
        $this->db->where('DATEDIFF(NOW(),dateCreated) > 7');
        $this->db->where('jobcardStatus','open');
        $this->db->order_by('idJobcards', 'DESC');
        if($limit > 0){
            $this->db->limit($limit);
        }
        $result =  $this->db->get();
        return $result->result();
    }
    
    public function get_jobcard($jic)
    {
        $this->db->select('*');
        $this->db->from('jobcards');
        $this->db->where('idjobcards',$jic);
        $result =  $this->db->get();
        return $result->result();
    }
    
    public function get_jobcard_devices($jobcard)
    {
        $this->db->select('*');
        $this->db->from('jobcard_item');
        $this->db->join('temporaryDetails', 'jobcard_item.idjobcard_item = temporaryDetails.jobcardDevice','left');
        $this->db->where('jobcard',$jobcard);
        $result =  $this->db->get();
        return $result->result();
    }
    
    public function get_jobcard_device_forms($jobcard)
    {
        $this->db->select('*');
        $this->db->from('jobcard_item');
        $this->db->join('temporaryDetails', 'jobcard_item.idjobcard_item = temporaryDetails.jobcardDevice');
        $this->db->where('jobcard',$jobcard);
        $result =  $this->db->get();
        return $result->result();
    }
    
    public function get_jobcard_device($device)
    {
        $this->db->select('*');
        $this->db->from('jobcard_item');
        $this->db->where('idjobcard_item',$device);
        $result =  $this->db->get();
        return $result->result();
    }
    
    public function get_jobcard_device_access_details($device)
    {
        $this->db->select('*');
        $this->db->from('temporaryDetails');
        $this->db->where('jobcardDevice',$device);
        $result =  $this->db->get();
        return $result->result();
    }

    public function add_jobcard($data)
    {
        $this->db->insert('jobcards',$data);
        return $this->db->insert_id();
    }
    
    public function add_jobcard_device($data)
    {
        $this->db->insert('jobcard_item',$data);
        return $this->db->insert_id();
    }
    
    public function update_jobcard_device($data,$device)
    {
        $this->db->where('idjobcard_item', $device);
        $this->db->update('jobcard_item',$data);
    }
    
    public function add_job_details($data)
    {
        $this->db->insert('temporaryDetails',$data);
    }
    
    public function update_jobcard($data,$jbc)
    {
        $this->db->where('idJobcards', $jbc);
        $this->db->update('jobcards',$data);
    }
    
    public function get_jobcard_count($status = ''){
        $this->db->select('COUNT(*) as count');
        $this->db->from('jobcards');
        if($status != ''){
            $this->db->where('jobcardStatus',$status);
        }
        $this->db->order_by('idJobcards', 'DESC');
        $result =  $this->db->get();
        return $result->first_row();
    }
    
    public function get_total_devices_open()
    {
        $result = $this->db->query("SELECT COUNT(*) as openDevices FROM jobcard_item i RIGHT JOIN jobcards j ON i.jobcard = j.idJobcards WHERE i.jobcard != '' AND j.jobcardStatus = 'open';");
        return $result->first_row();
    }
    
    public function get_total_devices()
    {
        $this->db->select('COUNT(*) as countDevices');
        $this->db->from('jobcard_item');
        $result = $this->db->get();
        return $result->first_row();
    }
}