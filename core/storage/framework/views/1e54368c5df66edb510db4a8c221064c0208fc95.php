<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Currency')); ?> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Payment Settings')); ?></li>
            <li class="breadcrumb-item"><?php echo e(__('Currency')); ?></li>
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
                        <h3 class="card-title mt-1"><?php echo e(__('Currency List')); ?></h3>
                        <div class="card-tools">
                            <a href="<?php echo e(route('admin.currency.add')); ?>" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus"></i> <?php echo e(__('Add Currency')); ?>

                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                    <table id="idtable" class="table table-bordered table-striped data_table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo e(__('Name')); ?></th>
                                <th><?php echo e(__('Sign')); ?></th>
                                <th><?php echo e(__('Value')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $currency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$curr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$id); ?></td>
                                <td>
                                    <?php echo e($curr->name); ?>

                                </td>

                                <td>
                                    <?php echo e($curr->sign); ?>

                                </td>

                                <td>
                                    <?php echo e($curr->value); ?>

                                </td>

                                <td>
                                    <?php if($curr->is_default == 1): ?>
                                    <a href="javascript:;" class="btn btn-success btn-sm"><?php echo e(__('Default')); ?></a>
                                    <a href="<?php echo e(route('admin.currency.edit', $curr->id)); ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i><?php echo e(__('Edit')); ?></a>
                                        <?php if($curr->id == 1): ?>

                                        <?php else: ?>
                                        <form  id="deleteform" class="d-inline-block" action="<?php echo e(route('admin.currency.delete', $curr->id )); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="id" value="<?php echo e($curr->id); ?>">
                                            <button type="submit" class="btn btn-danger btn-sm" id="delete">
                                            <i class="fas fa-trash"></i><?php echo e(__('Delete')); ?>

                                            </button>
                                        </form>
                                        
                                        <?php endif; ?>

                                    <?php else: ?>
                                    <a href="<?php echo e(route('admin.currency.status', $curr->id )); ?>" class="btn btn-primary btn-sm"><?php echo e(__('Set Default')); ?></a>
                                    <a href="<?php echo e(route('admin.currency.edit', $curr->id)); ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i><?php echo e(__('Edit')); ?></a>

                                        <?php if($curr->id == 1): ?>

                                        <?php else: ?>
                                        <form  id="deleteform" class="d-inline-block" action="<?php echo e(route('admin.currency.delete', $curr->id )); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="id" value="<?php echo e($curr->id); ?>">
                                            <button type="submit" class="btn btn-danger btn-sm" id="delete">
                                            <i class="fas fa-trash"></i><?php echo e(__('Delete')); ?>

                                            </button>
                                        </form>
                                        
                                        
                                        <?php endif; ?>

                                    <?php endif; ?>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lapakgra/domains/lapakgrafi.my.id/public_html/core/resources/views/admin/currency/index.blade.php ENDPATH**/ ?>