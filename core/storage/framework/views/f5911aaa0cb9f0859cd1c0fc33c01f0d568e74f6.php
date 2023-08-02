

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Jobs')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Jobs')); ?></li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                    <h3 class="card-title"><?php echo e(__('Job List:')); ?></h3>
                    <div class="card-tools d-flex">
                        <div class="d-inline-block mr-4">
                            <select class="form-control lang" id="languageSelect" data="<?php echo e(url()->current() . '?language='); ?>">
                                <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($lang->code); ?>" <?php echo e($lang->code == request()->input('language') ? 'selected' : ''); ?> ><?php echo e($lang->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <form class="d-inline-block mr-3" action="<?php echo e(route('back.bulk.delete')); ?>" method="get">
                            <input type="hidden" value="" name="ids[]" id="bulk_delete">
                            <input type="hidden" value="job" name="table">
                            <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> <?php echo e(__('Bulk Delete')); ?></button>
                        </form>
                        <a href="<?php echo e(route('admin.job.add'). '?language=' . $currentLang->code); ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> <?php echo e(__('Add')); ?>

                        </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered data_table">
                        <thead>
                            <tr>
                                <th><input type="checkbox" data-target="job-bulk-delete" class="bulk_all_delete">
                                </th>
                                <th><?php echo e(__('Title')); ?></th>
                                <th><?php echo e(__('Position')); ?></th>
                                <th><?php echo e(__('Vacancy')); ?></th>
                                <th><?php echo e(__('Category')); ?></th>
                                <th><?php echo e(__('Dead line')); ?></th>
                                <th><?php echo e(__('Status')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr id="job-bulk-delete">
                                <td>
                                    <input type="checkbox" class="bulk-item" value="<?php echo e($job->id); ?> ">
                                </td>
                                <td>
                                    <?php echo e($job->title); ?>

                                </td>
                                <td>
                                    <?php echo e($job->position); ?>

                                </td>
                                <td>
                                    <?php echo e($job->vacancy); ?>

                                </td>
                                <td>
                                    <?php echo e($job->jcategory->name); ?>

                                </td>

                                <td>
                                    <?php echo e(Carbon\Carbon::parse($job->deadline)->format('d-M-Y')); ?>

                                </td>

                                <td>
                                    <?php if($job->status == 1): ?>
                                        <span class="badge badge-success"><?php echo e(__('Publish')); ?></span>
                                    <?php else: ?>
                                        <span class="badge badge-warning"><?php echo e(__('Unpublish')); ?></span>
                                    <?php endif; ?>

                                </td>
                                <td>
                                    <a href="<?php echo e(route('admin.job.edit', $job->id)); ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i><?php echo e(__('Edit')); ?></a>

                                    <form  id="deleteform" class="d-inline-block" action="<?php echo e(route('admin.job.delete', $job->id )); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?php echo e($job->id); ?>">
                                        <button type="submit" class="btn btn-danger btn-sm" id="delete">
                                        <i class="fas fa-trash"></i><?php echo e(__('Delete')); ?>

                                        </button>
                                    </form>

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lapakgra/domains/lapakgrafi.my.id/public_html/core/resources/views/admin/job/index.blade.php ENDPATH**/ ?>