<?php

class Job{

	private $db;

	// Database init
	public function __construct(){
		session_start();
		$this->db = new Database;
	}

	// Get all jobs
	public function getAllJobs(){
		$this->db->query('SELECT * FROM jobs ORDER BY post_date DESC');
		$results = $this->db->resultSet();
		return $results;
	}

	// Get categories
	public function getCategories(){
		$this->db->query('SELECT * FROM categories');
		$results = $this->db->resultSet();
		return $results;
	}

	// Get jobs by category
	public function getJobsByCategory($category){
		$this->db->query("
			SELECT *
			FROM jobs
			WHERE category_id = $category
			ORDER BY post_date DESC
		");
		$results = $this->db->resultSet();
		return $results;
	}

	// Get category by id
	public function getCategoryById($id){
		$this->db->query("SELECT * FROM categories WHERE id=:category_id");
		$this->db->bind(':category_id', $id);
		$result = $this->db->single();
		return $result;
	}

	// Get Job
	public function getJob($id){
		$this->db->query("SELECT * FROM jobs WHERE id=:job_id");
		$this->db->bind(':job_id', $id);
		$result = $this->db->single();
		return $result;
	}

	// Create Job
	public function create($data){
		// Query
		$this->db->query("
			INSERT INTO jobs (category_id, job_title, company, description, location, salary, contact_user, contact_email, post_date)
			VALUES (:category_id, :job_title, :company, :description, :location, :salary, :contact_user, :contact_email, current_timestamp)
		");
		// Bind data
		$this->db->bind(':category_id', $data['category_id']);
		$this->db->bind(':job_title', $data['job_title']);
		$this->db->bind(':company', $data['company']);
		$this->db->bind(':description', $data['description']);
		$this->db->bind(':location', $data['location']);
		$this->db->bind(':salary', $data['salary']);
		$this->db->bind(':contact_user', $data['contact_user']);
		$this->db->bind(':contact_email', $data['contact_email']);

		if($this->db->execute()){
			return true;
		} else {
			return false;
		}
	}

	// Delete Job
	public function delete( $id ) {
		// Delete query
		$this->db->query( "DELETE FROM jobs WHERE id = $id" );
		// Execute
		if ( $this->db->execute() ) {
			return true;
		} else {
			return false;
		}
	}
}