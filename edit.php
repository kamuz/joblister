<?php

require_once 'config/init.php';

$job = new Job;
$job_id = isset($_GET['id']) ? $_GET['id'] : null;

if ( isset($_POST['submit']) ) {
	// Create data array
	$data = [];
	$data['job_title'] = $_POST['title'];
	$data['company'] = $_POST['company'];
	$data['category_id'] = $_POST['category'];
	$data['description'] = $_POST['description'];
	$data['location'] = $_POST['location'];
	$data['salary'] = $_POST['salary'];
	$data['contact_email'] = $_POST['email'];
	$data['contact_user'] = $_POST['user'];
}

if ( !empty( $data ) ) {
	if ( $job->edit( $job_id, $data ) ) {
		redirect('index.php', 'Your job has been updated', 'success');
	} else {
		redirect('index.php', 'Something went wrong', 'warning');
	}
}

$template = new Template('templates/job-edit.php');
$template->job = $job->getJob( $job_id );
$template->categories = $job->getCategories();

echo $template;