<?php
class Post_handler extends CI_Model
{
    const POSTS_PER_PAGE = 5;


    /**
     * Construct
     */
    public function __construct() {
        parent::__construct();
        
        //Load model
        $this->load->model('Post');
    }
    
    /**
     * Get last posts 
     * 
     * @param int $page
     * @return Post[]
     */
    public function getLastPosts($page = 1) {
        $offset = ($page - 1) * self::POSTS_PER_PAGE; 
        
        $this->db->where('published', 1);
        $this->db->order_by('cd', 'desc');
        $this->db->limit(self::POSTS_PER_PAGE, $offset);
        $this->db->from('post');
        
        $query = $this->db->get();
        
        $result = $query->result();
        
        $posts = array();
        
        foreach($result as $row) {
            $posts[] = $this->Post->loadFromTableRow($row);
        }
        
        return $posts;
    }
}