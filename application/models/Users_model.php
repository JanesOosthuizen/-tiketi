<?php
class Users_model extends CI_Model {

//        public $title;
//        public $content;
//        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        
        function check_username($username)
        {

            $this->db->select('*');
            $this->db->where('email_address',$username);
            $this->db->from('users');
            $usernameCount = $this->db->count_all_results();
            if($usernameCount < 1){
                return true;
            } else {
                return false;
            }

        }

        function check_user_login($username, $password)
        {

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('email_address',$username);
            $this->db->where('password',md5($password));
            $loginCount = $this->db->count_all_results();
            if($loginCount == 1){
                $user_id = $this->get_user_id($username,$password);
                $user_data  = $this->get_user_data($user_id);
                $newdata = array(
                    'user_id'  => $user_id,
                    'username' => $user_data['name'].' '.$user_data['surname'],
                    'company'  => $user_data['company'],
                    'capabilties' => $user_data['capabilities'],
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($newdata);
                $this->update_user_login($user_id);
                return true;
            } else {
                return false;
            }
        }
        
        public function get_user_capability($uid)
        {
            $this->db->select('capabilities');
            $this->db->from('users');
            $this->db->where('user_id',$uid);
            $query = $this->db->get();
            $result = $query->first_row();
            return $result;
        }
        
        public function get_user_id($username, $password) {
            $this->db->select('user_id');
            $this->db->from('users');
            $this->db->where('email_address',$username);
            $this->db->where('password',md5($password));
            $result = $this->db->get();
            $results = $result->result();
            foreach($results as $row){
                $row_id = $row->user_id;
            }
            return $row_id;
        }
        
        public function update_user_login($id)
        {
            $data = array(
                'last_login' => date('Y-m-d H:i:s'),
                'last_ip' => $_SERVER['REMOTE_ADDR']
            );

            $this->db->where('user_id', $id);
            $this->db->update('users', $data);

        }

        function get_user_data($id) {
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('user_id',$id);
            $result =  $this->db->get();
            $results = $result->result();
            $data = array();
            foreach($results as $row){
                foreach($row as $key => $r){
                    $data[$key] = $r;
                }
            }

            return $data;
        }
        
        public function get_users($users = 0)
        {
            $this->db->select('*');
            //$this->db->where('company',  $companyId);
            $this->db->where('active',1);
            $this->db->where('capabilities', $users);
            $this->db->from('users');
            $imeis = $this->db->get();
            return $imeis->result();
        }
        
        public function add_user($data)
        {
            $this->db->insert('users', $data);
        }

        public function update_user_details($pdata,$userid){
            $data = array(
                'name' => $pdata['name'],
                'surname' => $pdata['surname'],
                'email_address' => $pdata['email']
            );

            $this->db->where('user_id', $userid);
            $this->db->update('users', $data);
        }
        
        public function update_user_password($pdata,$userid){
            $data = array(
                'password' => $pdata['password']
            );

            $this->db->where('user_id', $userid);
            $this->db->update('users', $data);
        }
        
        public function update_user_prop($data,$userid)
        {
            $this->db->where('user_id', $userid);
            $this->db->update('users', $data);
        }
}