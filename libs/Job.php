<?php

class Job{

	private $db;

	// Database init
	public function __construct(){
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
}