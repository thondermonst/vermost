<?php
class Page extends CI_Model
{
    /**
     * @var str
     */
    private $_site_name;

    /**
     * @var str
     */
    private $_page_title;
    
    /**
     * @var array
     */
    private $_meta = array();

    /**
     * @var array
     */
    private $_css = array();
    
    /**
     * @var array
     */
    private $_js = array();
    
    /**
     * @var str
     */
    private $_html;
    
    /**
     * @var string
     */
    private $_active_tab;

    /**
     * @return str
     */
    public function getSite_name() {
        return $this->_site_name;
    }

    /**
     * @return str
     */
    public function getPage_title() {
        return $this->_page_title;
    }

    /**
     * @return array
     */
    public function getMeta() {
        return $this->_meta;
    }

    /**
     * @return array
     */
    public function getCss() {
        return $this->_css;
    }

    /**
     * @return array
     */
    public function getJs() {
        return $this->_js;
    }

    /**
     * @return str
     */
    public function getHtml() {
        return $this->_html;
    }

    /**
     * @return str
     */
    public function getActive_tab() {
        return $this->_active_tab;
    }
    
    /**
     * @param str $site_name
     */
    public function setSite_name($site_name) {
        $this->_site_name = $site_name;
    }

    /**
     * @param str $page_title
     */
    public function setPage_title($page_title) {
        $this->_page_title = $page_title;
    }

    /**
     * @param array $meta
     */
    public function setMeta($meta) {
        $this->_meta = $meta;
    }
    
    /**
     * @param array $tag
     */
    public function addMeta($tag) {
        array_push($this->_meta, $tag);
    }

    /**
     * @param array $css
     */
    public function setCss($css) {
        $this->_css = $css;
    }
    
    /**
     * @param str $style
     */
    public function addCss($style) {
        array_push($this->_css, $style); 
    }

    /**
     * @param str $script
     */
    public function addJs($script) {
        array_push($this->_js, $script);
    }

    /**
     * @param array $js
     */
    public function setJs($js) {
        $this->_js = $js;
    }
    
    /**
     * @param str $html
     */
    public function setHtml($html) {
        $this->_html = $html;
    }
    
    /**
     * @param str $block
     */
    public function addHtml($block) {
        $this->_html .= $block;
    }
    
    /**
     * 
     * @param str $active_tab
     */
    public function setActive_tab($active_tab) {
        $this->_active_tab = $active_tab;
    }
}