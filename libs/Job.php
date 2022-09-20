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
}