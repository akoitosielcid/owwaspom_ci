<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AnnouncementController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //1
    }

    // Other controller methods here
    public function index() {
        // Method to display announcements

        $this->load->view('list');
        }
    
    public function add() {
        // Method to add a new announcement
        echo "Add announcement";
        $this->load->view('list');
    }   
    
    public function edit($id) {
        // Method to edit an existing announcement
        echo "Edit announcement";
        $this->load->view('list');
    }
    
}
