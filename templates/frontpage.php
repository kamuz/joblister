<?php include 'partials/header.php'; ?>
<div class="jumbotron">
	<h2>Find your best job</h2>
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, tenetur optio in eius assumenda, magnam quibusdam sapiente illo est commodi voluptates aliquid aspernatur quos ipsa dolore fugit laboriosam vero. Quia.</p>
	<a href="#" class="btn btn-lg btn-success">Sign up today</a>
</div>
<div class="row marketing">
	<div class="col-lg-12">
		<?php dd($jobs) ?>
		<?php foreach($jobs as $job): ?>
			<div class="job-post">
				<div class="row">
					<div class="col-md-10">
						<h4><?php echo $job->job_title; ?></h4>
						<p><?php echo $job->description; ?></p></div>
					<div class="col-md-2">
						<a class="btn btn-default pull-right" href="#" role="button">View details »</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<?php include 'partials/footer.php'; ?>