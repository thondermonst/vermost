<?php
class Post extends CI_Model
{
    /**
     * @var int
     */
    private $_id;
    
    /**
     * @var str
     */
    private $_title;
    
    /**
     * @var str 
     */
    private $_text;
    
    /**
     * @var str
     */
    private $_img;
    
    /**
     * @var str
     */
    private $_cd;
    
    /**
     * @return int
     */
    public function getId() {
        return $this->_id;
    }

    /**
     * @return str
     */
    public function getTitle() {
        return $this->_title;
    }

    public function getText() {
        return $this->_text;
    }

    /**
     * @return str
     */
    public function getImg() {
        return $this->_img;
    }
    
    /**
     * @return str
     */
    public function getCd() {
        return $this->_cd;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /**
     * @param str $title
     */
    public function setTitle($title) {
        $this->_title = $title;
    }

    /**
     * @param str $text
     */
    public function setText($text) {
        $this->_text = $text;
    }

    /**
     * @param str $img
     */
    public function setImg($img) {
        $this->_img = $img;
    }
    
    /**
     * @param str $cd
     */
    public function setCd($cd) {
        $this->_cd = $cd;
    }
    
    /**
     * Load from table row
     * 
     * @param stdClass $row
     * @return Post
     */
    public function loadFromTableRow($row) {
        $post = new Post();
        $post->setId($row->id);
        $post->setTitle($row->title);
        $post->setText($row->text);
        $post->setImg($row->img);
        
        return $post;
    }
}