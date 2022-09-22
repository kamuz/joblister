<?php

require_once 'config/init.php';

$job = new Job;

if ( isset( $_POST['delete'] ) ) {
	$del_id = $_POST['delete'];
	if ( $job->delete( $del_id ) ) {
		redirect( 'index.php', 'Job Deleted', 'danger' );
	} else {
		redirect( 'index.php', 'Job Not Deleted', 'warning' );
	}
}

$template = new Template('templates/job-single.php');
$job_id = isset($_GET['id']) ? $_GET['id'] : null;
$template->job = $job->getJob($job_id);

echo $template;