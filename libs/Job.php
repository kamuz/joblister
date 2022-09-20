<?php

class Job{
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	// Get all jobs
	public function getAllJobs(){
		$this->db->query('
			SELECT *
			FROM jobs
		');
		// Assign result set
		$results = $this->db->resultSet();
		return $results;
	}
}