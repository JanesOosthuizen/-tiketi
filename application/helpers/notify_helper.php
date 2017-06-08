<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('notify_add'))
{
    function notify_add($message,$img = '')
    {
        $ci =& get_instance();
        $notifs = array();
        $notifs[] = $message; 
        $ci->session->set_flashdata('notify', $notifs);
    }   
}