<?php
class Main extends CI_Controller
{
    /**
     * @var Page
     */
    private $_page;

    /**
     * Construct
     */
    public function __construct() {
        parent::__construct();
        
        //Load the Page model
        $this->load->model('Page');
        
        //Create a page
        $this->_page = new Page();
        
        //Do default actions
        $this->_doDefaultActions();
    }
    
    /**
     * Set page title
     * 
     * @param str $page_title
     */
    protected function _setPage_title($page_title) {
        $this->_page->setPage_title($page_title);
    }

        /**
     * Add CSS
     * 
     * @param str $style
     */
    protected function _addCss($style) {
        $this->_page->addCss($style);
    }
    
    /**
     * Add Javascript
     * 
     * @param str $script
     */
    protected function _addJs($script) {
        $this->_page->addJs($script);
    }

    /**
     * Add HTML
     * 
     * @param str $block
     */
    protected function _addHtml($block) {
        $this->_page->addHtml($block);
    }
    
    /**
     * Render page
     * 
     * @param str $container
     */
    protected function _render($container = 'container') {
        $this->load->view($container, array('page' => $this->_page), false);
    }
    
    /**
     * Add header
     */
    protected function _addHeader() {
        $this->_addHtml($this->load->view('header', array(), true));
    }

    /**
     * Add footer
     */
    protected function _addFooter() {
        $this->_addHtml($this->load->view('footer', array(), true));
    }

    /**
     * Set active tab
     */
    protected function _setActive_tab($tab) {
        $this->_page->setActive_tab($tab);
    }

    /**
     * Add navigation
     */
    protected function _addNavigation() {
        $nav = $this->_loadNavigation();
        
        $this->_addHtml($this->load->view('navigation', array('nav' => $nav), true));
    }

    
    /**
     * Do default actions
     */
    private function _doDefaultActions() {
        //Set styles
        $this->_setDefaultStyles();
        
        //Set scripts
        $this->_setDefaultScripts();
        
        //Determine the language
        $this->_checkLanguage();
        
        //Set default page properties
        $this->_page->setSite_name(lang('site_name'));
        
        $meta = array(
            'description' => lang('meta_description'),
            'keywords'  =>  lang('meta_keywords'),
            'author' => lang('meta_author')
        );
        
        $this->_page->setMeta($meta);
    }
    
    /**
     * Set default styles
     */
    private function _setDefaultStyles() {
        $this->_page->addCss('style.css');
    }
    
    /**
     * Set default scripts
     */
    private function _setDefaultScripts() {
        $this->_page->addJs('jquery-1.11.2.min.js');
        $this->_page->addJs('script.js');
    }

    /**
     * Check language
     */
    private function _checkLanguage() {
        $this->lang->load('vermost', 'english');
    }
    
    private function _loadNavigation() {
        $nav = array();
        
        $nav[0] = array();
        
        $nav[0]['tab'] = 'home';
        $nav[0]['display'] = lang('nav_display_index');
        $nav[0]['url'] = 'index';
        $nav[0]['status'] = ($this->_page->getActive_tab() == $nav[0]['tab']) ? 'active' : 'inactive';
        
        $nav[1]['tab'] = 'about';
        $nav[1]['display'] = lang('nav_display_about');
        $nav[1]['url'] = 'about';
        $nav[1]['status'] = ($this->_page->getActive_tab() == $nav[1]['tab']) ? 'active' : 'inactive';
        
        $nav[2]['tab'] = 'cv';
        $nav[2]['display'] = lang('nav_display_cv');
        $nav[2]['url'] = 'cv';
        $nav[2]['status'] = ($this->_page->getActive_tab() == $nav[2]['tab']) ? 'active' : 'inactive';
        
        $nav[3]['tab'] = 'projects';
        $nav[3]['display'] = lang('nav_display_projects');
        $nav[3]['url'] = 'projects';
        $nav[3]['status'] = ($this->_page->getActive_tab() == $nav[3]['tab']) ? 'active' : 'inactive';
        
        $nav[4]['tab'] = 'contact';
        $nav[4]['display'] = lang('nav_display_contact');
        $nav[4]['url'] = 'contact';
        $nav[4]['status'] = ($this->_page->getActive_tab() == $nav[4]['tab']) ? 'active' : 'inactive';
        
        return $nav;
    }
}