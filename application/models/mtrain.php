<?php 
 
class Mtrain extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getruteawal()
    {
        $query = $this->db->query('SELECT distinct(ruteawal) FROM rutekereta');
        return $query->result();
    }

    public function getruteakhir()
    {
        $query = $this->db->query('SELECT distinct(ruteakhir) FROM rutekereta');
        return $query->result();
    }

    public function tampildata()
    {
    	return $this->db->get('rutekereta');
    }

    public function searchrute(array $rute)
    {
    	$this->db->like('ruteawal', $rute["ruteawal"]);
    	$this->db->like('ruteakhir', $rute["ruteakhir"]);
    	$query = $this->db->get('rutekereta');
    	return $query->result();
    }
}