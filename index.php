<?php

require_once 'config/init.php';

$job = new Job;
$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if ( $category ) {
	$template->title = $job->getCategoryById($category)->name;
	$template->jobs = $job->getJobsByCategory($category);
} else {
	$template->title = 'Latest Jobs';
	$template->jobs = $job->getAllJobs();
}

$template->categories = $job->getCategories();

echo $template;