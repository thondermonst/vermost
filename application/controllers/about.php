<?php
include_once 'main.php';

class About extends Main
{
    /**
     * Construct
     */
    public function __construct() {
        parent::__construct();
        
        //Set page variables
        $this->_setPage_title(lang('about_page_title'));
        $this->_setActive_tab('about');
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
        $this->_addHtml($this->load->view('about', array(), true));
        
        //Add footer
        $this->_addFooter();
        
        //Render page
        $this->_render();
    }
}