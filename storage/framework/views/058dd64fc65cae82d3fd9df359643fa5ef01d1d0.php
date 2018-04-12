<?php $__env->startSection('css'); ?>
	<link rel="stylesheet" href="<?php echo e(URL::asset('css/register.css')); ?>" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<h2>Login</h2>
	<form method="post" action="/login">
		<?php echo e(csrf_field()); ?>


		<div class="component">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo e(old('email')); ?>"/>
		</div>

		<div class="component">
			<label>Passwords</label>
			<input type="password" name="password" />
		</div>

		<div class="component">
			<input type="checkbox" class="checkbox" name="remember" />
			Remember Me
		</div>

		<div class="component">
			<button type="submit">Login</button>
		</div>
	</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>