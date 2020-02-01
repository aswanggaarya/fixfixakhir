<?php 
 
class Mdiskonpes extends CI_Model{
	public function getkodediskon()
    {
        $query = $this->db->query('SELECT kodediskon FROM diskonpesawat');
        return $query->result();
    }

	public function searchdiskon(array $diskon)
    {
    	$this->db->like('kodediskon', $diskon["kodediskon"]);
    	$query = $this->db->get('diskonpesawat');
        return $query->result();
    }
}