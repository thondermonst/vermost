<?php
include_once 'main.php';

class Contact extends Main
{
    /**
     * Construct
     */
    public function __construct() {
        parent::__construct();
        
        //Set page variables
        $this->_setPage_title(lang('contact_page_title'));
        $this->_setActive_tab('contact');
    }
    
    /**
     * Index
     */
    public function index() {
        //Add header
        $this->_addHeader();
        
        //Add navigation
        $this->_addNavigation();
        
        //Load content
        $this->_addHtml($this->load->view('contact', array(), true));
        
        //Add footer
        $this->_addFooter();
        
        //Render page
        $this->_render();
    }
}