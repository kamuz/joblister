<?php include 'partials/header.php'; ?>
<div class="jumbotron">
	<h3></h3>
	<form method="GET" action="index.php">
		<select name="category" class="form-control" id="category">
			<option value="0">Choose category</option>
			<?php foreach($categories as $category): ?>
				<option value="<?php echo $category->id; ?>" <?php echo $category->id == $_GET['category'] ? 'selected' : '' ?>><?php echo $category->name; ?></option>
			<?php endforeach; ?>
		</select>
		<input type="submit" class="btn btn-lg btn-success" value="Search job">
	</form>
</div>
<div class="row marketing">
	<div class="col-lg-12">
		<h1>Jobs in <?php echo $title; ?></h1>
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