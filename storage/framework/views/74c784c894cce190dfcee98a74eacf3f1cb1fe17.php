<?php $__env->startSection('css'); ?>
	<link rel="stylesheet" href="<?php echo e(URL::asset('css/register.css')); ?>" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<h2>Account register</h2>
	<form method="post" action="/auth/register">
		<?php echo e(csrf_field()); ?>

		<div class="component">
			<label for="name">Name</label>
			<input type="text" name="name" value="<?php echo e(old('name')); ?>"/>
		</div>

		<div class="component">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo e(old('email')); ?>"/>
		</div>

		<div class="component">
			<label>Passwords</label>
			<input type="password" name="password" />
		</div>

		<div class="component">
			<label>Passwords confirmation</label>
			<input type="password" name="password_confirmation" />
		</div>

		<div class="component">
			<button type="submit">Create</button>
		</div>
	</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>