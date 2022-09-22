<?php

require_once 'config/init.php';

$job = new Job;

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
	if ( $job->create( $data ) ) {
		redirect('index.php', 'Your job has been listed', 'success');
	} else {
		redirect('index.php', 'Something went wrong', 'warning');
	}
}

$template = new Template('templates/job-create.php');
$template->categories = $job->getCategories();

echo $template;