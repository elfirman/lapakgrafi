<?php $__env->startSection('meta-keywords', "$seo->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$seo->meta_description"); ?>



<?php $__env->startSection('content'); ?>

	<!--Main Breadcrumb Area Start -->
	<div class="page-title-area" style="background-image: url('<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>')">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="page-title-item text-center">
						<h2 class="title"><?php echo e(__('Downloadable')); ?></h2>
						<ul class="breadcrumb-nav">
							<li class=""><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
							<li class="active" aria-current="page"><?php echo e(__('Downloadable')); ?></li>
						</ul>
					</div> <!-- page title -->
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
	</div> 
	
	<!--Main Breadcrumb Area End -->


    
    <!-- User Dashboard Start -->
	<section class="user-dashboard-area section-gap">
		<div class="container">
		  <div class="row">
			<div class="col-lg-3">
				<?php if ($__env->exists('user.dashboard-sidenav')) echo $__env->make('user.dashboard-sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
			<div class="col-lg-9">
                <div class="card">
                    <h5 class="card-header"><?php echo e(__('Downloadable Product')); ?></h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 mt-3">
                                <div class="user-table-wrapper">
                                    <div class="user-table">
                                        <table class="table table-bordered table-striped">
                                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    $cart = json_decode($order->cart,true);
                                                ?>
                                                <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($item['downloadable_file']): ?>
                                                    <tr>
                                                        <td>
                                                            <h6><?php echo e($item['title']); ?></h6>
                                                            <?php if($item['downloadable_file']): ?>
                                                            <a class="btn btn-success btn-sm mt-3" href="<?php echo e(asset('assets/front/downloadable/'.$item['downloadable_file'])); ?>"><?php echo e(__('Download File')); ?></a>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                    <?php endif; ?>
                                                    
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		  </div>
		</div>
	
	  </section>
    <!-- User Dashboard End -->



<?php $__env->stopSection(); ?>




<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lapakgra/domains/lapakgrafi.my.id/public_html/core/resources/views/user/downloadable.blade.php ENDPATH**/ ?>