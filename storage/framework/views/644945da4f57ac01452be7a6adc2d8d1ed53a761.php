<?php $__env->startSection('css'); ?>
	<link rel="stylesheet" href="<?php echo e(URL::asset('css/new.css')); ?>" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<h2>Add new post</h2>
	<form method="post" action="/new">
		<?php echo e(csrf_field()); ?>

		<div class="component">
			<label for="title">Title</label>
			<input type="text" name="title" value="<?php echo e(old('title')); ?>"/>
		</div>

		<div class="component">
			<label>Text</label>
			<textarea rows="20" name="content"><?php echo e(old('content')); ?></textarea>
		</div>

		<div class="component">
			<button type="submit">Save</button>
		</div>
	</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>