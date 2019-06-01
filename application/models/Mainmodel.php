<?php  defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Mainmodel extends CI_Model {

	/*function getusers(){

		$response = array();

		//select record
		$this->db->select('id');
		$q = $this->db->get('table1');
		$response = $q->result_array();
		return $response;*/



// to check value is inserted in db or not
	
	public function insert($data)
	{
		if(!empty($data))
		{
			$this->db->insert('table2',$data);
			return 1;
		}	
		else
		{
			return 0;
		}
	}
	public function logindata($data) 

	{

// Query to check whether username already exist or not
		
		$this->db->select('*');
		$this->db->from('table2');
		$this->db->where('reg_name', $data['reg_name']);
		$this->db->where('reg_password', $data['reg_password']);
		
		$query = $this->db->get();
		if ($query->num_rows() > 0) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}


	//different
	//show and delete database

	// Function to select all from table name students.
			function show_students()
			{
				$query = $this->db->get('students');
				$query_result = $query->result();
				return $query_result;
			}


	// Function to select particular record from table name students.
			function show_student_id($data)
			{
				$this->db->select('*');
				$this->db->from('students');
				$this->db->where('student_id', $data);
				$query = $this->db->get();
				$result = $query->result();
				return $result;
			}
			// Function to Delete selected record from table name students.
			function delete_student_id($id)
			{
				
				$this->db->where('student_id', $id);
				$this->db->delete('students');
				
			}



			// Update Query For Selected Student
			function update_student_id1($id,$data)
			{
				$this->db->where('student_id', $id);
				$this->db->update('students', $data);
			}


			function form_insert($data)
			{
				$this->db->insert('students', $data);
			}
						
}
?>