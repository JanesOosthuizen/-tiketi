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
    
    public function get_jobcards()
    {
        $this->db->select('*');
        $this->db->from('jobcards');
        $this->db->order_by('idJobcards', 'DESC');
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
    
    public function update_jobcard()
    {
        
    }
}