<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller{
    
    function index(){
        
        $this->load->view('templateuser');
    }
    function purabukitsinunggal(){
        
        $this->load->view('purabukitsinunggal');
    }
    function bhuawanasiwabudha(){
        
        $this->load->view('bhuawanasiwabudha');
    }
    function puragoaraja(){
        
        $this->load->view('puragoaraja');
    }
}
?>