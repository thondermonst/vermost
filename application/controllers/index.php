<?php
include_once 'main.php';

class Index extends Main
{

    /**
     * Construct
     */
    public function __construct() {
        parent::__construct();
        
        //Load model
        $this->load->model('Post_handler');
        
        //Set page variables
        $this->_setPage_title(lang('index_page_title'));
        $this->_setActive_tab('home');
    }
    
    /**
     * Default controller
     */
    public function index($page = 1) {
        //Add header
        $this->_addHeader();
        
        //Add navigation
        $this->_addNavigation();
        
        //Load posts
        $posts = $this->Post_handler->getLastPosts($page);
        
        //Add Welcome page to html
        $this->_addHtml($this->load->view('home', array('posts' => $posts), true));
        
        //Add footer
        $this->_addFooter();
        
        //Render page
        $this->_render();
    }
}