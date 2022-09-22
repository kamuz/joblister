<?php include 'partials/header.php'; ?>
<div class="row marketing">
	<div class="col-lg-12">
		<div class="well">
			<h1>Edit job listing</h1>
			<form method="POST" action="edit.php?id=<?php echo $job->id; ?>">
				<div class="form-group">
					<label for="company">Company</label>
					<input type="text" class="form-control" name="company" value="<?php echo $job->company; ?>">
				</div>
				<div class="form-group">
					<label for="categories">Category</label>
					<select name="category" id="category" class="form-control">
						<option value="">Choose category</option>
						<?php foreach($categories as $category): ?>
							<option value="<?php echo $category->id; ?>" <?php echo ( $category->id == $job->category_id ) ? 'selected' : '' ?>><?php echo $category->name; ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label for="title">Job Title</label>
					<input type="text" class="form-control" name="title" value="<?php echo $job->job_title ?>">
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea class="form-control" name="description"><?php echo $job->description; ?></textarea>
				</div>
				<div class="form-group">
					<label for="location">Location</label>
					<input type="text" class="form-control" name="location" value="<?php echo $job->location; ?>">
				</div>
				<div class="form-group">
					<label for="salary">Salary</label>
					<input type="text" class="form-control" name="salary" value="<?php echo $job->salary; ?>">
				</div>
				<div class="form-group">
					<label for="user">Contact User</label>
					<input type="text" class="form-control" name="user" value="<?php echo $job->contact_user; ?>">
				</div>
				<div class="form-group">
					<label for="email">Contact Email</label>
					<input type="email" class="form-control" name="email" value="<?php echo $job->contact_email; ?>">
				</div>
				<input type="submit" class="btn btn-lg btn-success" name="submit" value="Submit">
			</form>
		</div>
	</div>
</div>
<?php include 'partials/footer.php'; ?>