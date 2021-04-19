<?php
class StudentPagination_Model extends CI_Model 
{

    public function get_count() 
	{
        return $this->db->count_all("student");
    }
    public function get_countAo($id) 
    {
        $this->db->where('idloaiao', $id); 
        return $this->db->count_all("ao");
    }
    public function GetAobyIDloaiao($id, $start = -1, $limit = -1)
    {
        $this->db->select('*');
        $this->db->where('idloaiao', $id);
        if ($start > 0 && $limit > 0) {
            return $this->db->get('ao', $limit, $start)->result_array();
        }
        return $this->db->get('ao')->result_array();
    }
    
    public function GetAobyTenAo($ten, $start = -1, $limit = -1)
    {
        $this->db->like('ten',$ten);
        
        if ($start > 0 && $limit > 0) {
            $data= $this->db->get('ao', $limit, $start)->result_array();

        }
        else $data= $this->db->get('ao')->result_array();

         $this->db->last_query();
       // var_dump($data);exit;
        return $data;
    }
    public function get_students($limit, $start) 
	{
        $this->db->limit($limit, $start);
        $query = $this->db->get("student");
        return $query->result();
    }
}
?>
