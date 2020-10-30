<?php
    class queries extends CI_Model{
    	public function getPosts(){
    		$query = $this->db->get('my_posts');
    		if($query->num_rows()>0){
    			return $query->result();
    		}
    	}
    	public function addPost($data){
    		return $this->db->insert('my_posts', $data);
            
    	}
    	public function getSinglePosts($id){
    		$query = $this->db->get_where('my_posts',array('id'=>$id));
    		if($query->num_rows()>0){
    			return $query->row();
    		}
    	}

    	public function updatePost($data, $id){
    		return $this->db->where('id', $id)->update('my_posts',$data);
    	}

    	public function deletePosts($id){
    		return $this->db->delete('my_posts',['id'=>$id]);
    	}
    }
?>