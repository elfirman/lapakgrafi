

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Applicants')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Applicants')); ?></li>
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
                    <h3 class="card-title"><?php echo e(__('Applicants List:')); ?></h3>
                    <div class="card-tools">
                      <form class="d-inline-block mr-3" action="<?php echo e(route('back.bulk.delete')); ?>" method="get">
                        <input type="hidden" value="" name="ids[]" id="bulk_delete">
                        <input type="hidden" value="applicant" name="table">
                        <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> <?php echo e(__('Bulk Delete')); ?></button>
                    </form>

                      </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered data_table">
                        <thead>
                            <tr>
                                <th><input type="checkbox" data-target="applicant-bulk-delete" class="bulk_all_delete"></th>
                                <th><?php echo e(__('Job Title')); ?></th>
                                <th><?php echo e(__('Job Position')); ?></th>
                                <th><?php echo e(__('Apply Date')); ?></th>
                                <th><?php echo e(__('Status')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $applicants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$applicant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr id="applicant-bulk-delete">
                                <th>
                                  <input type="checkbox" class="bulk-item" value="<?php echo e($applicant->id); ?> ">
                                </th>

                                <td>
                                    <?php echo e($applicant->job_title); ?>

                                </td>

                                <td>
                                    <?php echo e($applicant->type); ?>

                                </td>

                                <td>
                                    <?php echo e($applicant->created_at->diffForHumans()); ?>

                                </td>

                                <td>
                                    <form id="statusForm<?php echo e($applicant->id); ?>" class="d-inline-block" action="<?php echo e(route('admin.application.status')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="applicant_id" value="<?php echo e($applicant->id); ?>">
                                        <select class="form-control form-control-sm
                                        <?php if($applicant->status == '0'): ?>
                                          bg-primary
                                        <?php elseif($applicant->status == '1'): ?>
                                          bg-info
                                        <?php elseif($applicant->status == '2'): ?>
                                          bg-success
                                        <?php elseif($applicant->status == '3'): ?>
                                          bg-danger
                                        <?php endif; ?>
                                        " name="status" onchange="document.getElementById('statusForm<?php echo e($applicant->id); ?>').submit();">
                                          <option value="0" <?php echo e($applicant->status == '0' ? 'selected' : ''); ?>>Pending</option>
                                          <option value="1" <?php echo e($applicant->status == '1' ? 'selected' : ''); ?>>Interviewing</option>
                                          <option value="2" <?php echo e($applicant->status == '2' ? 'selected' : ''); ?>>Selected</option>
                                          <option value="3" <?php echo e($applicant->status == '3' ? 'selected' : ''); ?>>Rejected</option>
                                        </select>
                                      </form>
                                </td>
                                <td>
                                    <button type="button" data-href="<?php echo e(route('admin.applicant.details',$applicant->id)); ?>" class="btn btn-primary view_applicant_details btn-sm" data-toggle="modal" data-target="#view_job_details_modal">
                                        <i class="fas fa-eye"></i> <?php echo e(__('View')); ?>

                                      </button>


                                    <form  id="deleteform" class="d-inline-block" action="<?php echo e(route('admin.applicant.delete', $applicant->id )); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?php echo e($applicant->id); ?>">
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

    <div class="modal fade" id="view_job_details_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle"><?php echo e(__('View Applicant Information')); ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" id="info_view">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
            </div>
          </div>
        </div>
      </div>

</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lapakgra/domains/lapakgrafi.my.id/public_html/core/resources/views/admin/job/applicant/index.blade.php ENDPATH**/ ?>