
<?php $__env->startSection('meta-keywords', "$seo->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$seo->meta_description"); ?>
<?php $__env->startSection('content'); ?>

    <?php if($visibility->is_t6_slider_section == 1): ?>
    <!--====== Banner Slider Start ======-->
    <?php if($visibility->is_video_hero == 1): ?>
        <section id="herovideo" class="banner-section-three theme6" style="background-image: url(<?php echo e(asset('assets/front/img/'.$sinfo->hero_bg_image )); ?>);">
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
    <?php else: ?>
        <section class="banner-slider banner-slider-two banner-slider-active">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="single-banner" style="background-image: url(<?php echo e(asset('assets/front/img/slider/'.$item->image)); ?>)">
                <div class="container">
                    <div class="row align-items-center <?php if($currentLang->direction == 'rtl'): ?> justify-content-end  <?php endif; ?>">
                        <div class="col-xl-9">
                            <div class="banner-text">
                                <div class="banner-content">
                                    <span data-animation="fadeInUp" data-delay="0.3s" class="title-tag">
                                        <?php echo e($item->subtitle); ?>

                                    </span>
                                    <h1 data-animation="fadeInLeft" data-delay="0.6s" class="title">
                                        <?php echo e($item->title); ?>

                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".9s">
                                        <?php echo e($item->text); ?>

                                    </p>
                                    <a data-animation="fadeInUp" data-delay="1.1s" class="main-btn rounded-btn icon-right small-size" href="<?php echo e($item->button_link); ?>">
                                        <?php echo e($item->button_text); ?> <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>
    <?php endif; ?>
    <!--====== Banner Slider End ======-->
    <?php endif; ?>

    <?php if($visibility->is_t6_client_section == 1): ?>
    <!--====== Brand Slider Start ======-->
    <section class="brand-section pt-80 pb-80 soft-blue-bg">
        <div class="container">
            <div class="brand-slider row">
                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="brand-item full-opacity">
                        <a href="<?php echo e($item->link); ?>"><img src="<?php echo e(asset('assets/front/img/client/'.$item->image)); ?>" alt="<?php echo e($item->name); ?>"></a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!--====== Brand Slider End ======-->
    <?php endif; ?>

    <?php if($visibility->is_t6_who_we_are_section == 1): ?>
    <!--====== Why Choose Us Start ======-->
    <section class="whu-section section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 order-lg-2 col-md-9">
                    <div class="tile-gallery-two">
                        <div class="img-one wow fadeInLeft"  data-wow-delay="0.3s">
                            <img src="<?php echo e(asset('assets/front/img/'.$sinfo->w_c_us_image1 )); ?>" alt="Image">
                        </div>
                        <div class="img-two text-right wow fadeInUp"  data-wow-delay="0.4s">
                            <img src="<?php echo e(asset('assets/front/img/'.$sinfo->w_c_us_image2 )); ?>" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 col-md-10">
                    <div class="mt-md-gap-60">
                        <div class="section-title mb-50 wow fadeInUp"  data-wow-delay="0.3s">
                            <span class="title-tag"><?php echo e($sinfo->w_c_us_sub_title); ?></span>
                            <h2 class="title"><?php echo e($sinfo->w_c_us_title); ?></h2>
                        </div>
                        <ul class="feature-list">
                            <?php $__currentLoopData = $why_selects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="wow fadeInUp" data-wow-delay="0.5s">
                                <h4><?php echo e($item->title); ?></h4>
                                <p>
                                    <?php echo e($item->text); ?>

                                </p>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Why Choose Us End ======-->
    <?php endif; ?>

    <?php if($visibility->is_t6_service_section == 1): ?>
    <!--====== Service Area Start ======-->
    <section class="service-section service-with-shape-two section-gap">
        <div class="square-shape"></div>
        <div class="square-shape-two"></div>
        <div class="container">
            <div class="section-title white-color text-center mb-10">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <span class="title-tag"><?php echo e($sinfo->service_sub_title); ?></span>
                        <h2 class="title"><?php echo e($sinfo->service_title); ?></h2>
                    </div>
                </div>
                <div class="ring-shape"></div>
            </div>
            <div class="row justify-content-center">
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 col-sm-9 wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="service-item-four no-border mt-50">
                        <div class="services-thumb">
                            <img src="<?php echo e(asset('assets/front/img/service/'.$item->image)); ?>" alt="Service-Image">
                        </div>
                        <div class="services-content">

                            <h4 class="title"><?php echo e($item->title); ?></h4>
                            <p>
                                <?php echo e((strlen(strip_tags(Helper::convertUtf8($item->content))) > 140) ? substr(strip_tags(Helper::convertUtf8($item->content)), 0, 140) . '...' : strip_tags(Helper::convertUtf8($item->content))); ?>

                            </p>
                            <a href="<?php echo e(route('front.service.details', $item->slug)); ?>" class="service-link">
                                <?php echo e(__('Read More')); ?> <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!--====== Service Area End ======-->
    <?php endif; ?>

    <?php if($visibility->is_t6_project_section == 1): ?>
    <!--====== Portfolio Section Start ======-->
    <section class="portfolio-area section-gap-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-30 wow fadeInUp">
                        <span class="title-tag"><?php echo e($sinfo->portfolio_sub_title); ?></span>
                        <h2 class="title"><?php echo e($sinfo->portfolio_title); ?></h2>
                    </div>
                </div>
            </div>
            <div class="portfolio-items row">
                <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-item mt-30">
                        <div class="portfolio-img" style="background-image: url(<?php echo e(asset('assets/front/img/portfolio/'.$item->featured_image)); ?>)">
                        </div>
                        <div class="portfolio-content">
                            <div class="item">
                                <span class="category"><?php echo e($item->service->title); ?></span>
                                <h5 class="title"><?php echo e((strlen(strip_tags(Helper::convertUtf8($item->title))) > 40) ? substr(strip_tags(Helper::convertUtf8($item->title)), 0, 40) . '...' : strip_tags(Helper::convertUtf8($item->title))); ?></h5>
                            </div>
                            <a href="<?php echo e(route('front.portfolio.details', $item->slug)); ?>" class="portfolio-link"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!--====== Portfolio Section Ends ======-->
    <?php endif; ?>

    <?php if($visibility->is_t6_team_section == 1): ?>
    <!--====== Team Section Start ======-->
    <section class="team-area team-with-shape-two section-gap ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title white-color text-center mb-50">
                        <span class="title-tag"><?php echo e($sinfo->team_sub_title); ?></span>
                        <h2 class="title"><?php echo e($sinfo->team_title); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row team-members">
                <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-member-two mt-30">
                        <div class="member-photo">
                            <img src="<?php echo e(asset('assets/front/img/team/'.$item->image)); ?>" alt="Member-Photo">
                        </div>
                        <div class="team-content">
                            <div class="social-icon">
                                <?php if($item->url1 && $item->icon1): ?>
                                    <a href="<?php echo e($item->url1); ?>">
                                        <i class="<?php echo e($item->icon1); ?>"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if($item->url2 && $item->icon2): ?>
                                    <a href="<?php echo e($item->url2); ?>">
                                        <i class="<?php echo e($item->icon2); ?>"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if($item->url3 && $item->icon3): ?>
                                    <a href="<?php echo e($item->url3); ?>">
                                        <i class="<?php echo e($item->icon3); ?>"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if($item->url4 && $item->icon4): ?>
                                    <a href="<?php echo e($item->url4); ?>">
                                        <i class="<?php echo e($item->icon4); ?>"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if($item->url5 && $item->icon5): ?>
                                    <a href="<?php echo e($item->url5); ?>">
                                        <i class="<?php echo e($item->icon5); ?>"></i>
                                    </a>
                                <?php endif; ?>
                            </div>

                            <h5 class="name"><a href="<?php echo e(route('front.team_details', $item->id)); ?>"><?php echo e($item->name); ?></a></h5>
                            <span class="position"><?php echo e($item->dagenation); ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!--====== Team Section Ends ======-->
    <?php endif; ?>

    <?php if($visibility->is_t6_testimonial_section == 1): ?>
    <!--====== Testimonials Section Start ======-->
    <section class="testimonials-section section-gap-bottom">
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
    <!--====== Testimonials Section Ends ======-->
    <?php endif; ?>

    <?php if($visibility->is_t6_faq_counter_section == 1): ?>
    <!--====== Counter Faq Start ======-->
    <section class="counter-faq-section-one primary-bg">
        <div class="container">
            <div class="row justify-content-center align-self-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title white-color mb-50">
                        <span class="title-tag"><?php echo e($sinfo->faq_sub_title); ?></span>
                        <h2 class="title"><?php echo e($sinfo->faq_title); ?></h2>
                    </div>
                    <div class="accordion-one white-version" id="accordionExample">
                        <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card">
                            <div class="card-header" id="heading<?php echo e($item->id); ?>">
                                <a class="<?php echo e($loop->first ? '' : 'collapsed'); ?>" href="" data-toggle="collapse" data-target="#collapse<?php echo e($item->id); ?>" aria-expanded="<?php echo e($loop->first ? 'true' : 'false'); ?>" aria-controls="collapse<?php echo e($item->id); ?>">
                                    <i class="fal fa-long-arrow-right"></i><?php echo e($item->title); ?>

                                </a>
                            </div>
    
                            <div id="collapse<?php echo e($item->id); ?>" class="collapse  <?php echo e($loop->first ? 'show' : ''); ?>" aria-labelledby="heading<?php echo e($item->id); ?>" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="text-white">
                                        <?php echo $item->content; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 d-flex">
                    <div class="faq-counter-boxes-two row align-self-center">
                        <?php $__currentLoopData = $counters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="counter-box-two counter-active">
                                <div class="counter-wrap">
                                    <span class="counter"><?php echo e($item->number); ?></span> <sup>+</sup>
                                </div>
                                <span class="title"><?php echo e($item->title); ?></span>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-image">
            <img src="<?php echo e(asset('assets/front/')); ?>/images/map.png" alt="Map">
        </div>
    </section>
    <!--====== Counter Faq End ======-->
    <?php endif; ?>

    <?php if($visibility->is_t6_meetus_section == 1): ?>
    <!--====== Call to action Start ======-->
    <section class="call-to-action-two cta-mt-negative">
        <div class="container">
            <div class="call-to-action-inner" style="background-image: url(<?php echo e(asset('assets/front/img/'.$sinfo->meeet_us_bg_image )); ?>);">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-7">
                        <h3 class="title"><?php echo e($sinfo->meeet_us_text); ?></h3>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo e($sinfo->meeet_us_button_link); ?>" class="main-btn small-size rounded-btn icon-right mt-md-gap-40"><?php echo e($sinfo->meeet_us_button_text); ?> <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Call to action End ======-->
    <?php endif; ?>

    <?php if($visibility->is_t6_blog_section == 1): ?>
    <!--====== Latest News Start ======-->
    <section class="latest-news section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-30 wow fadeInUp" data-wow-delay="0.3s">
                        <span class="title-tag"><?php echo e($sinfo->blog_sub_title); ?></span>
                        <h2 class="title"><?php echo e($sinfo->blog_title); ?></h2>
                    </div> 
                </div> 
            </div>
            <div class="row justify-content-center">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="latest-news-box mt-30">
                        <div class="post-thumb">
                            <img src="<?php echo e(asset('assets/front/img/blog/'.$item->image)); ?>" alt="Image">
                        </div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li><a href="#">By Admin,</a></li>
                                <li><a href="#"><?php echo e(date ( 'd M, Y', strtotime($item->created_at) )); ?></a></li>
                            </ul>
                            <h4 class="title">
                                <a href="<?php echo e(route('front.blogdetails', $item->slug)); ?>">
                                    <?php echo e((strlen(strip_tags(Helper::convertUtf8($item->title))) > 40) ? substr(strip_tags(Helper::convertUtf8($item->title)), 0, 40) . '...' : strip_tags(Helper::convertUtf8($item->title))); ?>

                                </a>
                            </h4>
                            <a href="<?php echo e(route('front.blogdetails', $item->slug)); ?>" class="read-more-btn"><?php echo e(__('Read More')); ?> <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!--====== Latest News End ======-->
    <?php endif; ?>

    <?php if($visibility->is_t6_map_section == 1): ?>
    <!--====== Contact Map start ======-->
    <section class="contact-map">
        <div class="contact-map-one">
            <?php echo $sinfo->contact_map; ?>

        </div>
    </section>
    <!--====== Contact Map End ======-->
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lapakgra/domains/lapakgrafi.my.id/public_html/core/resources/views/front/themes/theme6.blade.php ENDPATH**/ ?>