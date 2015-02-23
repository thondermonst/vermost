<?php
class Project_handler extends CI_Model
{
    /**
     * Construct
     */
    public function __construct() {
        parent::__construct();
        
        //Load model
        $this->load->model('Project');
    }
    
    /**
     * Get projects
     * 
     * @param str $order
     * @return Project[]
     */
    public function getProject($order = 'asc') {
        $this->db->order_by($order);
        $this->db->from('project');
        
        $query = $this->db->get();
        
        $result = $query->result();
        
        $projects = array();
        
        foreach($result as $row) {
            $projects[] = $this->Project->loadFromTableRow($row);
        }
        
        return $projects;
    }
}