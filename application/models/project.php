<?php
class Project extends CI_Model
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
    private $_description;
    
    /**
     * @var str 
     */
    private $_image;
    
    /**
     * @var str 
     */
    private $_period;
    
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

    /**
     * @return str
     */
    public function getDescription() {
        return $this->_description;
    }

    /**
     * @return str
     */
    public function getImage() {
        return $this->_image;
    }

    /**
     * @return str
     */
    public function getPeriod() {
        return $this->_period;
    }

    /**
     * @param int $id
     */
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
     * @param str $description
     */
    public function setDescription($description) {
        $this->_description = $description;
    }

    /**
     * @param str $image
     */
    public function setImage($image) {
        $this->_image = $image;
    }

    /**
     * @param str $period
     */
    public function setPeriod($period) {
        $this->_period = $period;
    }
    
    /**
     * Load from table row
     * 
     * @param stdClass $row
     * @return Project
     */
    public function loadFromTableRow($row) {
        $project = new Project();
        $project->setId($row->id);
        $project->setTitle($row->title);
        $project->setDescription($row->description);
        $project->setPeriod($row->period);
        
        return $project;
    }
}