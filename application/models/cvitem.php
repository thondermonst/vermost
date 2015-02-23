<?php
class Cvitem extends CI_Model
{
    /**
     * @var int 
     */
    private $_id;
    
    /**
     * @var str 
     */
    private $_type;
    
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
    private $_organisation;
    
    /**
     * @var str
     */
    private $_from;
    
    /**
     * @var str
     */
    private $_until;
    
    /**
     * @return int
     */
    public function getId() {
        return $this->_id;
    }

    /**
     * @return str
     */
    public function getType() {
        return $this->_type;
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
    public function getOrganisation() {
        return $this->_organisation;
    }

    /**
     * @return str
     */
    public function getFrom() {
        return $this->_from;
    }

    /**
     * @return str
     */
    public function getUntil() {
        return $this->_until;
    }

    /**
     * @param int $id
     */
    public function setId($id) {
        $this->_id = $id;
    }

    /**
     * @param str $type
     */
    public function setType($type) {
        $this->_type = $type;
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
     * @param str $organisation
     */
    public function setOrganisation($organisation) {
        $this->_organisation = $organisation;
    }

    /**
     * @param str $from
     */
    public function setFrom($from) {
        $this->_from = $from;
    }

    /**
     * @param str $until
     */
    public function setUntil($until) {
        $this->_until = $until;
    }
    
    /**
     * Load from table row
     * 
     * @param stdClass $row
     * @return Cvitem
     */
    public function loadFromTableRow($row) {
        $cvitem = new Cvitem();
        $cvitem->setId($row->id);
        $cvitem->setType($row->type);
        $cvitem->setTitle($row->title);
        $cvitem->setDescription($row->description);
        $cvitem->setOrganisation($row->organisation);
        $cvitem->setFrom($row->from);
        $cvitem->setUntil($row->until);
        
        return $cvitem;
    }
}