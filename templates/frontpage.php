<?php include 'partials/header.php'; ?>
<div class="jumbotron">
	<form method="GET" action="index.php">
		<select name="category" class="form-control" id="category">
			<option value="">Choose category</option>
			<?php foreach($categories as $category): ?>
				<option value="<?php echo $category->id; ?>" <?php echo $category->id == $_GET['category'] ? 'selected' : '' ?>><?php echo $category->name; ?></option>
			<?php endforeach; ?>
		</select>
		<input type="submit" class="btn btn-lg btn-success" value="Search job">
	</form>
</div>
<div class="row marketing">
	<div class="col-lg-12">
		<h1><?php echo $_GET['category'] ? 'Jobs in ' : ''; ?> <?php echo $title; ?></h1>
		<?php if($jobs): ?>
			<?php foreach($jobs as $job): ?>
				<div class="job-post">
					<div class="row">
						<div class="col-md-10">
							<h4><a href="#"><?php echo $job->job_title; ?></a></h4>
							<p><?php echo $job->description; ?></p></div>
						<div class="col-md-2">
							<a class="btn btn-default pull-right" href="#">View details »</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		<?php else: ?>
			<p style="margin-bottom: 30px;">Sorry, but jobs not found in this category.</p>
		<?php endif; ?>
	</div>
</div>
<?php include 'partials/footer.php'; ?>