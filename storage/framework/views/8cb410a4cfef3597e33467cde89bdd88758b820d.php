<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PHP Blog</title>
		<link rel="stylesheet" href="<?php echo e(URL::asset('css/layout.css')); ?>" type="text/css">
			<?php echo $__env->yieldContent('css'); ?>
	</head>

	<body>
		<div class="navbar">
			<ul>
				<li><a href="/new">New article</a></li>
				<li><a href="/">Articles</a></li>
				<?php if(Auth::user() !== null): ?>
					<li class="right"><a href="/logout">Logout</a></li>
				<?php else: ?>
					<li class="right"><a href="/auth/register">Sign up</a></li>
					<li class="right"><a href="/login">Sign in</a></li>
				<?php endif; ?>
			</ul>
		</div>

		<div class="content">
			<?php if($errors->count() > 0): ?>
				<div class="alert">
					<strong>Whoops! Something went wrong!</strong>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<p><?php echo e($error); ?></p>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			<?php endif; ?>

			<?php echo $__env->yieldContent('content'); ?>
		</div>
	</body>
</html>
