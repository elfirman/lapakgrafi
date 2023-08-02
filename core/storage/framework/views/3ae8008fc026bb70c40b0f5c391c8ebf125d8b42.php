


<?php $__env->startSection('content'); ?>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('Languages')); ?></h1>
                <?php echo $__env->yieldPushContent('breadcrumb-plugins'); ?>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('Languages')); ?></li>
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
                            <h3 class="card-title mt-1">Language Keywords of <?php echo e($la->name); ?></h3>
                            <div class="card-tools">
                                <a href="<?php echo e(route('admin.language-manage')); ?>" class="btn btn-sm btn-primary importBtn"><?php echo app('translator')->get('All Languages'); ?></a>
                                <button type="button" class="btn btn-sm btn-success  importBtn"><i class="la la-download"></i><?php echo app('translator')->get('Import Language'); ?></button>
                                <button type="button" data-toggle="modal" data-target="#addModal" class="btn btn-sm btn-primary "><i class="fa fa-plus"></i> <?php echo app('translator')->get('Add New Key'); ?> </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-striped data_table" id="myTable">
                                <thead>
                                <tr>
                                    <th scope="col"><?php echo app('translator')->get('Key'); ?>
                                    </th>
                                    <th scope="col" class="text-left">
                                        <?php echo e($la->name); ?>

                                    </th>

                                    <th scope="col" class="w-85"><?php echo app('translator')->get('Action'); ?></th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php $__currentLoopData = $json; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td data-label="<?php echo app('translator')->get('key'); ?>"><?php echo e($k); ?></td>
                                        <td data-label="<?php echo app('translator')->get('Value'); ?>" class="text-left "><?php echo e($lang); ?></td>


                                        <td data-label="<?php echo app('translator')->get('Action'); ?>">
                                            <a href="javascript:void(0)"
                                               data-target="#editModal"
                                               data-toggle="modal"
                                               data-title="<?php echo e($k); ?>"
                                               data-key="<?php echo e($k); ?>"
                                               data-value="<?php echo e($lang); ?>"
                                               class="editModal icon-btn ml-1 btn btn-primary  btn-sm"
                                               >
                                                <i class="fas fa-edit"></i>Edit
                                            </a>

                                            <a href="javascript:void(0)"
                                               data-key="<?php echo e($k); ?>"
                                               data-value="<?php echo e($lang); ?>"
                                               data-toggle="modal" data-target="#DelModal"
                                               class="icon-btn btn--danger ml-1 deleteKey btn btn-danger btn-sm"
                                               >
                                                <i class="fas fa-trash"></i>Delete
                                            </a>

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


    <div class="modal fade" id="addModal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"> <?php echo app('translator')->get('Add New'); ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>

                <form action="<?php echo e(route('admin.store-lang-key',$la->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label for="key" class="control-label font-weight-bold"><?php echo app('translator')->get('Key'); ?></label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control form-control-lg " id="key" name="key" value="<?php echo e(old('key')); ?>">
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label for="value" class="control-label font-weight-bold"><?php echo app('translator')->get('Value'); ?></label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control form-control-lg " id="value" name="value" value="<?php echo e(old('value')); ?>">
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                        <button type="submit" class="btn btn-primary"> <?php echo app('translator')->get('Save'); ?></button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><?php echo app('translator')->get('Edit'); ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>

                <form action="<?php echo e(route('admin.update-lang-key',$la->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group ">
                            <label for="inputName" class="control-label font-weight-bold form-title"></label>

                            <input type="text" class="form-control form-control-lg" name="value"
                                       placeholder="<?php echo app('translator')->get('Value'); ?>" value="">

                        </div>
                        <input type="hidden" name="key">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('Update'); ?></button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- Modal for DELETE -->
    <div class="modal fade" id="DelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><?php echo app('translator')->get('Delete Keyword'); ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <div class="modal-body">
                    <?php echo app('translator')->get('Are you sure to delete this keyword?'); ?>
                </div>
                <form action="<?php echo e(route('admin.delete-lang-key',$la->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="key">
                    <input type="hidden" name="value">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal"><?php echo app('translator')->get('No'); ?></button>
                        <button type="submit" class="btn btn-danger "><?php echo app('translator')->get('Yes'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>


     
     <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo app('translator')->get('Import Language'); ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center text--danger"><?php echo app('translator')->get('If you import keywords, Your current keywords will be removed and replaced by imported keyword'); ?></p>
                        <div class="form-group">
                        <label for="key" class="control-label font-weight-bold"><?php echo app('translator')->get('Key'); ?></label>
                        <select class="form-control select_lang"  required>
                            <option value=""><?php echo app('translator')->get('Import Keywords'); ?></option>
                            <?php $__currentLoopData = $list_lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($data->id); ?>" <?php if($data->id == $la->id): ?> class="d-none" <?php endif; ?> ><?php echo e(__($data->name)); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                    <button type="button" class="btn btn-primary import_lang"> <?php echo app('translator')->get('Import Now'); ?></button>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        (function($){
            "use strict";
            $('.deleteKey').on('click', function () {
                var modal = $('#DelModal');
                modal.find('input[name=key]').val($(this).data('key'));
                modal.find('input[name=value]').val($(this).data('value'));
            });
            $('.editModal').on('click', function () {
                var modal = $('#editModal');
                modal.find('.form-title').text($(this).data('title'));
                modal.find('input[name=key]').val($(this).data('key'));
                modal.find('input[name=value]').val($(this).data('value'));
            });


            $('.importBtn').on('click', function () {
                $('#importModal').modal('show');
            });
            $(document).on('click','.import_lang',function(){
                var id = $('.select_lang').val();

                if(id ==''){
                    iziToast.error({
                        message: "<?php echo app('translator')->get('Please Select a language to Import'); ?>",
                        position: "topRight"
                    });

                    return 0;
                }else{
                    $.ajax({
                        type:"post",
                        url:"<?php echo e(route('admin.language.import_lang')); ?>",
                        data:{
                            id : id,
                            myLangid : "<?php echo e($la->id); ?>",
                            _token: "<?php echo e(csrf_token()); ?>"
                        },
                        success:function(data){

                            if (data == 'success'){
                                iziToast.success({
                                    message: "<?php echo app('translator')->get('Import Data Successfully'); ?>",
                                    position: "topRight"
                                });

                                window.location.href = "<?php echo e(url()->current()); ?>"
                            }
                        }
                        ,
                        error:function(res){

                        }
                    });
                }
            });
        })(jQuery);


    </script>
<?php $__env->stopPush(); ?>




<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lapakgra/domains/lapakgrafi.my.id/public_html/core/resources/views/admin/language/edit_lang.blade.php ENDPATH**/ ?>