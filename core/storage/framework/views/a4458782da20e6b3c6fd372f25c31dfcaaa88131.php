<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Shipping Method')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Shipping Method')); ?></li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title mt-1"><?php echo e(__('Edit Shipping Method')); ?></h3>
                                <div class="card-tools">
                                    <a href="<?php echo e(route('admin.shipping.index'). '?language=' . $currentLang->code); ?>" class="btn btn-primary btn-sm">
                                        <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                                    </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="<?php echo e(route('admin.shipping.update',$method->id)); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group row">
                                        <label for="language_id" class="col-sm-2 control-label"><?php echo e(__('Language')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <select name="language_id" class="form-control">
                                                <option value="" selected disabled><?php echo e(__('Select a language')); ?></option>
                                                <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($lang->id); ?>" <?php echo e($method->language_id == $lang->id ? 'selected' : ''); ?> ><?php echo e($lang->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('language_id')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('language_id')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 control-label"><?php echo e(__('Title')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="title" placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e($method->title); ?>">
                                            <?php if($errors->has('title')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('title')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="subtitle" class="col-sm-2 control-label"><?php echo e(__('Subtitle')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="subtitle" placeholder="<?php echo e(__('Subtitle')); ?>" value="<?php echo e($method->subtitle); ?>">
                                            <?php if($errors->has('subtitle')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('subtitle')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="cost" class="col-sm-2 control-label"><?php echo e(__('Shipping Cost')); ?> ($)<span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="number" min="0" class="form-control" name="cost" placeholder="<?php echo e(__('Shipping Cost')); ?> ($)" value="<?php echo e(Helper::showPrice($method->cost)); ?>">
                                            <?php if($errors->has('cost')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('cost')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 control-label">Status<span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <select class="form-control" name="status">
                                                    <option value="0" <?php echo e($method->status == '0' ? 'selected' : ''); ?>><?php echo e(__('Unpublish')); ?></option>
                                                    <option value="1" <?php echo e($method->status == '1' ? 'selected' : ''); ?>><?php echo e(__('Publish')); ?></option>
                                            </select>
                                            <?php if($errors->has('status')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('status')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lapakgra/domains/lapakgrafi.my.id/public_html/core/resources/views/admin/shipping/edit.blade.php ENDPATH**/ ?>