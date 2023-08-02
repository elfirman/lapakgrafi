
<?php $__env->startSection('meta-keywords', "$seo->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$seo->meta_description"); ?>
<?php $__env->startSection('content'); ?>

    <?php if($extra_visibility->is_t9_slider_section == 1): ?>
        <!-- Hero Area Start -->
        <section class="ecommerce-slider">
            <div class="banner-slider  banner-slider-active" >
                <?php $__currentLoopData = $esliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eslider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="single-banner"  style="background-image: url(<?php echo e(asset('assets/front/img/slider/'.$eslider->background_image )); ?>">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="banner-text">
                                    <div class="banner-content">
                                        <h1 data-animation="fadeInDown" data-delay="0.8s" class="title">
                                            <?php echo e($eslider->title); ?>

                                        </h1>
                                        <span class="only"  data-animation="fadeInDown" data-delay="0.7s" ><?php echo e(__('ONLY')); ?></span>
                                        <h4 class="price"  data-animation="fadeInDown"  data-delay="0.6s" ><?php echo e(Helper::showCurrencyPrice($eslider->price)); ?></h4>
                                        <a data-animation="fadeInDown" data-delay="0.5s" class="main-btn rounded-btn icon-right small-size" href="<?php echo e($eslider->button_link); ?>">
                                            <?php echo e($eslider->button_text); ?> <i class="fal fa-long-arrow-right"></i>
                                        </a>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="banner-img" data-animation="fadeInDown" data-delay="0.7s">
                                    <img src="<?php echo e(asset('assets/front/img/slider/'.$eslider->image)); ?>" alt="Banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
               <!-- Shape Bottom -->
        </section>
        <!-- Hero Area End -->
    <?php endif; ?>

    <?php if($extra_visibility->is_t9_banner_section == 1): ?>
        
        <div class="e-section-banner section-gap-top">
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $ebanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ebanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-6">
                            <div class="single-banner">
                                <img src="<?php echo e(asset('assets/front/img/'.$ebanner->image)); ?>" alt="Image">
                                <div class="content">
                                    <div class="inner-content">
                                        <h3><?php echo e($ebanner->title); ?></h3>
                                        <h4><small><?php echo e(__('Starts From')); ?></small> <?php echo e(Helper::showCurrencyPrice($ebanner->price)); ?></h4>
                                        <a href="<?php echo e($ebanner->button_link); ?>" class="main-btn"><?php echo e($ebanner->button_text); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        
    <?php endif; ?>

    <?php if($extra_visibility->is_t9_popularcategory_section == 1): ?>
        
        <section class="popular-category-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title e-section-title mb-30 text-center">
                            <h2 class="title"><?php echo e(__('Popular Categories')); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php $__currentLoopData = $popularCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-md-6">
                            <a href="#" class="p-single-category">
                                <img src="<?php echo e(asset('assets/front/img/'.$item->image)); ?>" alt="Image">
                                <h4><?php echo e($item->name); ?></h4>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
        
    <?php endif; ?>



    <?php if($extra_visibility->is_t9_newproduct_section == 1): ?>
        
        <section class="popular-category-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title e-section-title mb-30 text-center">
                            <h2 class="title"><?php echo e(__('New Product')); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row entry-products">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item mb-30">
                            <div class="product-thumb">
                                <img src="<?php echo e(asset('assets/front/img/'.$product->image)); ?>" alt="Image">
                                <?php if($product->stock <= 0): ?>
                                    <?php if($product->is_downloadable != 1): ?>
                                        <span class="tag"><?php echo e(__('Stock Out')); ?></span>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <div class="product-overlay">
                                    <ul>
                                        <li><a href="javascript:;" data-href="<?php echo e(route('add.cart',$product->id)); ?>" class="cart-link"  data-toggle="tooltip" data-placement="right" title="<?php echo e(__('Add To Cart')); ?>"><i class="fal fa-shopping-cart"></i></a></li>
                                        <li>
                                          <form class="d-inline-block" method="GET" action="<?php echo e(route('front.product.checkout',$product->slug)); ?>">
                                            <button class=""  data-toggle="tooltip" data-placement="right" title="<?php echo e(__('Buy Now')); ?>"> <i class="fal fa-shopping-bag"></i></button>
                                          </form>
                                        <li><a href="<?php echo e(route('front.product.details',$product->slug)); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo e(__('View Details')); ?>"><i class="fal fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5 class="title"><a href="<?php echo e(route('front.product.details',$product->slug)); ?>"><?php echo e($product->title); ?></a></h5>
                                <div class="rate">
                                  <div class="rating" style="width:<?php echo e($product->rating * 20); ?>%"></div>
                                </div>
                                <p class="price"><del><?php echo e(Helper::showCurrencyPrice($product->previous_price)); ?></del> <?php echo e(Helper::showCurrencyPrice($product->current_price)); ?></p>
                            </div>
                        </div>
                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
            </div>
        </section>
        
    <?php endif; ?>

    <?php if($extra_visibility->is_t9_featureproduct_section == 1): ?>
        <?php $__currentLoopData = $featuredCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <section class="popular-category-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title e-section-title mb-30 text-center">
                            <h2 class="title"><?php echo e($fCategory->name); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row entry-products">
                    <?php $__currentLoopData = $fCategory->products->where('status',1)->take(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item mb-30">
                            <div class="product-thumb">
                                <img src="<?php echo e(asset('assets/front/img/'.$product->image)); ?>" alt="Image">
                                <?php if($product->stock <= 0): ?>
                                    <?php if($product->is_downloadable != 1): ?>
                                    <span class="tag"><?php echo e(__('Stock Out')); ?></span>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <div class="product-overlay">
                                    <ul>
                                        <li><a href="javascript:;" data-href="<?php echo e(route('add.cart',$product->id)); ?>" class="cart-link"  data-toggle="tooltip" data-placement="right" title="<?php echo e(__('Add To Cart')); ?>"><i class="fal fa-shopping-cart"></i></a></li>
                                        <li>
                                          <form class="d-inline-block" method="GET" action="<?php echo e(route('front.product.checkout',$product->slug)); ?>">
                                            <button class=""  data-toggle="tooltip" data-placement="right" title="<?php echo e(__('Buy Now')); ?>"> <i class="fal fa-shopping-bag"></i></button>
                                          </form>
                                        <li><a href="<?php echo e(route('front.product.details',$product->slug)); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo e(__('View Details')); ?>"><i class="fal fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5 class="title"><a href="<?php echo e(route('front.product.details',$product->slug)); ?>"><?php echo e($product->title); ?></a></h5>
                                <div class="rate">
                                  <div class="rating" style="width:<?php echo e($product->rating * 20); ?>%"></div>
                                </div>
                                <p class="price"><del><?php echo e(Helper::showCurrencyPrice($product->previous_price)); ?></del> <?php echo e(Helper::showCurrencyPrice($product->current_price)); ?></p>
                            </div>
                        </div>
                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
            </div>
        </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
        <div class="d-block mb-5 pb-5"></div>
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lapakgra/domains/lapakgrafi.my.id/public_html/core/resources/views/front/themes/theme9.blade.php ENDPATH**/ ?>