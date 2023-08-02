

<?php $__env->startSection('meta-keywords', "$seo->package_meta_key"); ?>
<?php $__env->startSection('meta-description', "$seo->package_meta_desc"); ?>
<?php $__env->startSection('content'); ?>

 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-title-area" style="background-image: url('<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title"><?php echo e($sinfo->package_title); ?></h2>
						<ul class="breadcrumb-nav">
							<li class=""><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
							<li class="active" aria-current="page"><?php echo e($sinfo->package_title); ?></li>
						</ul>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->
    
  <!--====== SERVICES PLANS PART START ======-->
         
  <div class="pricing-section section-gap">
	<div class="container">
		<div class="row">
			<?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-lg-4 col-md-6 col-sm-8 mt-30">
				<div class="pricing-plan-item text-center">
					<b class="plan-name"><?php echo e($plan->title); ?></b>
					<h3 class="price"><span> <?php echo e(Helper::showCurrencyPrice($plan->price)); ?></span></h3>
					<?php if($plan->time): ?>
					<span class="plan-duration"><?php echo e($plan->time); ?></span>
					<?php else: ?>
					<span class="bar"></span>
					<?php endif; ?>
					<ul class="list">
						<?php
							$feature = explode( ',', $plan->feature );
							for ($i=0; $i < count($feature); $i++) { 
								echo '<li><p href="mailto:'.$feature[$i].'">'.$feature[$i].'</p></li>';
							}
						?>
					</ul>
					<?php if($plan->button_text != null && $plan->button_link != null): ?>
						<a class="plans-btn" href="<?php echo e($plan->button_link); ?>"><?php echo e($plan->button_text); ?></a>
					<?php endif; ?>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</div> 

<!--====== SERVICES PLANS PART ENDS ======-->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lapakgra/domains/lapakgrafi.my.id/public_html/core/resources/views/front/package.blade.php ENDPATH**/ ?>