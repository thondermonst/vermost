<?php
class Cvitem_handler extends CI_Model
{
    /**
     * Construct
     */
    public function __construct() {
        parent::__construct();
        
        //Load model
        $this->load->model('Cvitem');
    }
    
    /**
     * Get cv items
     * 
     * @param str $type
     * @param str $order
     * @return Cvitem[]
     */
    public function getCvitems($type, $order = 'asc') {
        $this->db->where('type', $type);
        $this->db->order_by('from', $order);
        $this->db->from('cv');
        
        $query = $this->db->get();
        
        $result = $query->result();
        
        $cvitems = array();
        
        foreach($result as $row) {
            $cvitems[] = $this->Cvitem->loadFromTableRow($row);
        }
        
        return $cvitems;
    }
}