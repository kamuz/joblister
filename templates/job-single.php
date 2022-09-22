<?php include 'partials/header.php'; ?>
<div class="row marketing">
	<div class="col-lg-12">
		<a href="<?php echo SITE_URL; ?>" class="btn btn-default">Go Back</a>
		<h1 class="page-header"><?php echo $job->job_title; ?> (<?php echo $job->location; ?>)</h1>
		<small>Posted by: <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?></small>
		<hr>
		<p class="lead"><?php echo $job->description; ?></p>
		<ul class="list-group">
			<li class="list-group-item"><strong>Company:</strong> <?php echo $job->company; ?></li>
			<li class="list-group-item"><strong>Salary:</strong> <?php echo $job->salary; ?></li>
			<li class="list-group-item"><strong>Email:</strong> <?php echo $job->contact_email; ?></li>
		</ul>
		<a href="edit.php?id=<?php echo $job->id; ?>" class="btn btn-primary btn-lg">Edit Job</a>
		<form style="display: inline" method="POST" action="job.php">
			<input type="hidden" name="delete" value="<?php echo $job->id; ?>">
			<input type="submit" class="btn btn-danger btn-lg" value="Detele Job">
		</form>
		<br><br>
	</div>
</div>
<?php include 'partials/footer.php'; ?>