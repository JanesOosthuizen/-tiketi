<?php
class Settings_model extends CI_Model {

//        public $title;
//        public $content;
//        public $date;

    public function __construct()
    {
            // Call the CI_Model constructor
            parent::__construct();
    }

    public function get_devices()
    {
        $this->db->select('*');
        $this->db->from('devices');
        $this->db->order_by("iddevices", "desc");
        $devices = $this->db->get();
        return $devices->result();
    }
    
    public function add_device($data)
    {
        $this->db->insert('devices', $data);
    }
    
    public function getSettings()
    {
        $this->db->select('*');
        $this->db->from('Settings');
        $devices = $this->db->get();
        return $devices->result();
    }
    
    public function getSetting($key)
    {
        $this->db->select('*');
        $this->db->from('Settings');
        $this->db->where('settingKey',$key);
        $query = $this->db->get();
        $result = $query->first_row();
        return $result->settingValue;
    }
    
    public function checkIfExists($key)
    {
        $this->db->select('*');
        $this->db->where('settingKey',$key);
        $this->db->from('Settings');
        $keyCount = $this->db->count_all_results();
        if($keyCount < 1){
            return false;
        } else {
            return true;
        }
    }
    
    public function add_setting($key,$val)
    {
        $data = array(
            'settingKey' => $key,
            'settingValue' => $val
        );
        $this->db->insert('Settings', $data);
    }
    
    public function update_setting($key, $val)
    {
        $data = array(
            'settingKey' => $key,
            'settingValue' => $val
        );
        $this->db->where('settingKey', $key);
        $this->db->update('Settings', $data); 
    }
}