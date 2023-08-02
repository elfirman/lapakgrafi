
<?php $__env->startSection('meta-keywords', "$seo->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$seo->meta_description"); ?>
<?php $__env->startSection('content'); ?>

<!--====== BANNER PART START ======-->
<?php if($visibility->is_t4_hero_section == 1): ?>
    <section id="herovideo" class="banner-section-three" style="background-image: url(<?php echo e(asset('assets/front/img/'.$sinfo->hero_bg_image )); ?>);">
        <div id="bgndVideo" data-property="{videoURL:'<?php echo e($commonsetting->hero_section_video_link); ?>',containment:'#herovideo', quality:'large', autoPlay:true, loop:true, mute:true, opacity:1}"></div>
        <div class="overlay">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="banner-content text-center">
                            <span class="title-tag wow fadeInDown" data-wow-delay="0.3s"><?php echo e($sinfo->hero_sub_title); ?></span>
                            <h1 class="title wow fadeInLeft" data-wow-delay="0.5s"><?php echo e($sinfo->hero_title); ?></h1>
                            <p class="wow fadeInUp" data-wow-delay="0.7s"><?php echo e($sinfo->hero_text); ?></p>
                            <ul class="banner-btns">
                                <li class="wow fadeInUp" data-wow-delay="0.7s">
                                    <a class="main-btn rounded-btn" href="<?php echo e(route('front.quot')); ?>"><?php echo e(__('Gate A Quote')); ?></a>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="0.8s">
                                    <a class="main-btn transparent-border-btn rounded-btn" href="<?php echo e(route('front.about')); ?>"><?php echo e(__('Learn More')); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!--====== BANNER PART ENDS ======-->

<?php if($visibility->is_t4_client_section == 1): ?>
<div class="brand-section section-gap-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-slider">
                    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($item->link); ?>" class="brand-item">
                        <img src="<?php echo e(asset('assets/front/img/client/'.$item->image)); ?>" alt="<?php echo e($item->name); ?>">
                    </a> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div> <!-- brand item -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>
<?php endif; ?>

<!--====== FEATURES PART START ======-->
<?php if($visibility->is_t4_about_section == 1): ?>
<div class="about-section section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 order-2 order-lg-1  wow fadeInLeft" data-wow-delay="0.3s">
                <div class="about-thumb mt-30">
                    <img src="<?php echo e(asset('assets/front/img/'.$sinfo->about_image)); ?>" alt="">
                </div> <!-- about thumb -->
            </div>
            <div class="col-lg-6 col-md-12 wow fadeInRight order-1 order-lg-2" data-wow-delay="0.3s">
                <div class="about-text-block pl-lg-5 mt-md-gap-60">
                    <div class="section-title mb-40">
                        <span class="title-tag"><?php echo e($sinfo->about_sub_title); ?></span>
                        <h3 class="title"><?php echo e($sinfo->about_title); ?></h3>
                    </div>
                    <p class="text-color-3"><?php echo (strlen(strip_tags(Helper::convertUtf8($sinfo->about_text))) > 280) ? substr(strip_tags(Helper::convertUtf8($sinfo->about_text)), 0, 280) . '...' : strip_tags(Helper::convertUtf8($sinfo->about_text)); ?></p>
                    
                    <div class="about-experience pb-40 pt-20">
                        <h3><?php echo e($sinfo->about_experince_yers); ?></h3>
                        <span><?php echo e(__('Years Of Experience')); ?></span>
                    </div>
                    <ul class="about-btns">
                        <li>
                            <a class="main-btn" href="<?php echo e(route('front.about')); ?>"><?php echo e(__('Learn More')); ?></a>
                        </li>
                        <li>
                            <a class="main-btn main-btn-2 video-popup" href="<?php echo e($sinfo->about_intro_video); ?>"><i class="fal fa-video"></i> <?php echo e(__('Intro Video')); ?></a>
                        </li>
                    </ul>
                </div> <!-- about item -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>
 <!-- Service Start -->
<div class="container section-gap-bottom">
    <div class="row service-items">
            <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.3s">
                <div class="service-item-three text-center mt-30">
                    <div class="icon">
                        <i class="<?php echo e($item->icon); ?>"></i>
                    </div>
                    <h5 class="title"><?php echo e($item->title); ?></h5>
                    <p><?php echo e($item->text); ?></p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php endif; ?>
<!--====== FEATURES PART ENDS ======-->

<!--====== CHOOSE PART START ======-->
<?php if($visibility->is_t4_who_we_are_section == 1): ?>
<div class="whu-section section-gap soft-blue-bg">
    <div class="container">
        
        <div class="row justify-content-center align-content-center">
            <div class="col-lg-6 col-md-10 order-lg-2">
                <div class="tile-gallery-two mb-md-gap-50">
                    <div class="img-one wow fadeInRight" data-wow-delay="0.3s">
                        <img  src="<?php echo e(asset('assets/front/img/'.$sinfo->w_c_us_image1 )); ?>" alt="">
                    </div>
                    <div class="img-two text-right wow fadeInUp" data-wow-delay="0.5s">
                        <img  src="<?php echo e(asset('assets/front/img/'.$sinfo->w_c_us_image2 )); ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-10 order-lg-1">
                <div class="section-title mb-50 wow fadeInUp" data-wow-delay="0.3s">
                    <span class="title-tag"><?php echo e($sinfo->w_c_us_sub_title); ?></span>
                    <h3 class="title"><?php echo e($sinfo->w_c_us_title); ?></h3>
                </div>
                <ul class="feature-list">
                    <?php $__currentLoopData = $why_selects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="wow fadeInUp"  data-wow-delay="0.5s">
                        <h4><?php echo e($item->title); ?></h4>
                        <p><?php echo e($item->text); ?></p>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
        <?php if($setting->is_t4_intro_video_section == 1): ?>
        <div class="feature-intro-video mt-100">
            <img src="<?php echo e(asset('assets/front/img/'.$sinfo->video_bg_image )); ?>" alt="">
            <a class="video-popup" href="<?php echo e($sinfo->video_link); ?>"><i class="fal fa-play"></i></a>
        </div>
        <?php endif; ?>
    </div>
</div> 
<?php endif; ?>
<!--====== CHOOSE PART ENDS ======-->

<!--====== PORTFOLIO 3 PART START ======-->
<?php if($visibility->is_t4_portfolio_section == 1): ?>  
<div class="portfolio-area section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-30">
                    <span class="title-tag"><?php echo e($sinfo->portfolio_sub_title); ?></span>
                    <h2 class="title"><?php echo e($sinfo->portfolio_title); ?></h2>
                </div>
            </div>
        </div>
        <div class="portfolio-items justify-content-center row">
            <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.3s">
                <div class="portfolio-item-two mt-30">
                    <div class="portfolio-thumb">
                        <div class="portfolio-img" style="background-image: url(<?php echo e(asset('assets/front/img/portfolio/'.$item->featured_image)); ?>);"> </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="category"><?php echo e($item->service->title); ?></span>
                        <h5 class="title"><a href="<?php echo e(route('front.portfolio.details', $item->slug)); ?>">
                            <?php echo e((strlen(strip_tags(Helper::convertUtf8($item->title))) > 40) ? substr(strip_tags(Helper::convertUtf8($item->title)), 0, 40) . '...' : strip_tags(Helper::convertUtf8($item->title))); ?>

                            </a></h5>
                        <p><?php echo e((strlen(strip_tags(Helper::convertUtf8($item->content))) > 120) ? substr(strip_tags(Helper::convertUtf8($item->content)), 0, 120) . '...' : strip_tags(Helper::convertUtf8($item->content))); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div> 
<?php endif; ?>
<!--====== PORTFOLIO 3 PART ENDS ======-->

<!--====== COUNTER PART START ======-->
<?php if($visibility->is_t4_counter_section == 1): ?>  
<div class="counter-section-two" style="background-image: url(<?php echo e(asset('assets/front/')); ?>/images/video-bg.jpg);">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $counters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-box-five counter-active mb-50">
                    <div class="icon"><i class="<?php echo e($item->icon); ?>"></i></div>
                    <div class="content">
                        <span class="counter"><?php echo e($item->number); ?></span>
                        <h6 class="title"><?php echo e($item->title); ?></h6>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div> 
<?php endif; ?>
<!--====== COUNTER PART ENDS ======-->

<!--====== TESTIMONIAL PART START ======-->
<?php if($visibility->is_t4_testmonial_section == 1): ?>  
<section class="testimonials-section section-gap-top">
    <div class="container">
        <div class="testimonials-top mb-80">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="section-title mb-md-gap-30">
                        <span class="title-tag"><?php echo e($sinfo->testimonial_subtitle); ?></span>
                        <h2 class="title"><?php echo e($sinfo->testimonial_title); ?></h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="testimonials-arrow"></div>
                </div>
            </div>
        </div>

        <div class="row testimonials-slider-two">
            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-6">
                <div class="testimonial-box-two mb-30">
                    <div class="testimonial-inner">
                        <div class="testimonial-img">
                            <img src="<?php echo e(asset('assets/front/img/'.$item->image)); ?>" alt="Image">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="content">
                            <p>
                                <span class="d-block">
                                    <?php for($i = 0; $i < $item->rating; $i++): ?>
                                        <i class="fas fa-star"></i>
                                    <?php endfor; ?>
                                </span>
                                <?php echo e($item->message); ?>

                            </p>
                            <div class="author">
                                <h6 class="name"> <?php echo e($item->name); ?></h6>
                                <span class="position"><?php echo e($item->position); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<?php endif; ?>
<!--====== TESTIMONIAL PART ENDS ======-->
    
<!--====== FAQ PART START ======-->
<?php if($visibility->is_t4_faq_section == 1): ?>  
<div class="faq-section section-gap">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-10 wow fadeInLeft" data-wow-delay="0.3s">
                <div class="tile-gallery-three mb-md-gap-50">
                    <div class="img-one">
                        <img src="<?php echo e(asset('assets/front/img/'.$sinfo->faq_image2)); ?>" alt="">
                    </div>
                    <div class="img-two text-right">
                        <img src="<?php echo e(asset('assets/front/img/'.$sinfo->faq_image1)); ?>" alt="">
                    </div>
                </div> <!-- faq thumb -->
            </div>
            <div class="col-lg-6 col-md-10 wow fadeInRight" data-wow-delay="0.3s">
                <div class="section-title-two mb-50">
                    <span class="title-tag"><?php echo e($sinfo->faq_sub_title); ?></span>
                    <h2 class="title"><?php echo e($sinfo->faq_title); ?></h2>
                </div> <!-- section title -->
                <div class="accordion-three" id="accordionExample">
                    <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                        <div class="card-header" id="heading<?php echo e($item->id); ?>">
                            <a class="<?php echo e($loop->first ? '' : 'collapsed'); ?>" href="" data-toggle="collapse" data-target="#collapse<?php echo e($item->id); ?>" aria-expanded="<?php echo e($loop->first ? 'true' : 'false'); ?>" aria-controls="collapse<?php echo e($item->id); ?>">
                                <?php echo e($item->title); ?>

                            </a>
                        </div>

                        <div id="collapse<?php echo e($item->id); ?>" class="collapse  <?php echo e($loop->first ? 'show' : ''); ?>" aria-labelledby="heading<?php echo e($item->id); ?>" data-parent="#accordionExample">
                            <div class="card-body">
                                <p><?php echo $item->content; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>
<?php endif; ?>
<!--====== FAQ PART ENDS ======-->

<!--====== GET IN TOUCH PART START ======-->
<?php if($visibility->is_t4_contact_section == 1): ?>   
<div class="conatct-section-three soft-blue-bg section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-50">
                    <span class="title-tag"><?php echo e($sinfo->contact_sub_title); ?></span>
                    <h2 class="title"><?php echo e($sinfo->contact_title); ?></h2>
                </div> <!-- section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-area">
                    <form action="<?php echo e(route('front.contact.submit')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="input-box wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                            <input type="text" placeholder="<?php echo e(__('Full Name Here')); ?>" name="name">
                        </div>
                        <div class="input-box mt-20 wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".4s">
                            <input type="email" placeholder="<?php echo e(__('Email Here')); ?>" name="email">
                        </div>
                        <div class="input-box mt-20 wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".4s">
                            <input type="text" placeholder="<?php echo e(__('Phone No')); ?>" name="phone">
                        </div>
                        <div class="input-box mt-20 wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".4s">
                            <input type="text" placeholder="<?php echo e(__('Subject')); ?>" name="subject">
                        </div>
                        <div class="input-box mt-20 wow fadeInLeft" data-wow-duration="1.4s" data-wow-delay=".6s">
                            <textarea name="message" id="#" cols="30" rows="10" placeholder="<?php echo e(__('Message Us')); ?>"></textarea>
                        </div>
                        <div class="input-box mt-20">
                            <?php if($visibility->is_recaptcha == 1): ?>
                            <div class="">
                              <?php echo NoCaptcha::renderJs(); ?>

                              <?php echo NoCaptcha::display(); ?>

                              <?php if($errors->has('g-recaptcha-response')): ?>
                                <?php
                                    $errmsg = $errors->first('g-recaptcha-response');
                                ?>
                                <p class="text-danger mb-0"><?php echo e(__("$errmsg")); ?></p>
                              <?php endif; ?>
                            </div>
                        <?php endif; ?>
                            <button class="main-btn  mt-20 wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".2s" type="submit"><?php echo e(__('Send Message')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="contact-map-two mt-md-gap-50">
                    <?php echo $sinfo->contact_map; ?>

                </div>
            </div>
        </div>
    </div>
</div> 
<?php endif; ?>
<!--====== GET IN TOUCH PART ENDS ======-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lapakgra/domains/lapakgrafi.my.id/public_html/core/resources/views/front/themes/theme4.blade.php ENDPATH**/ ?>