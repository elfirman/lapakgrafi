
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
           <tbody>
              <tr>
                 <td width="35%"><?php echo e(__('Applicant Name')); ?></td>
                 <td><?php echo e($apply->name); ?></td>
              </tr>
              <tr>
                 <td width="35%"><?php echo e(__('Applicant Email')); ?></td>
                 <td><?php echo e($apply->email); ?></td>
              </tr>
              <tr>
                 <td width="35%"><?php echo e(__('Job Position')); ?></td>
                 <td> <?php echo e($apply->type); ?></td>
              </tr>
              <tr>
                 <td width="35%"><?php echo e(__('Applicant Expected Salary')); ?></td>
                 <td><?php echo e($apply->expected_salary); ?></td>
              </tr>
              <tr>
                 <td width="35%"><?php echo e(__('Applicant Message')); ?></td>
                 <td><?php echo e($apply->message); ?></td>
              </tr>
              <tr class="attachment_list">
                 <td width="35%"><?php echo e(__('Applicant CV')); ?></td>
                 <td><a href="<?php echo e(asset('assets/front/application/'.$apply->file)); ?>" class="btn btn-sm btn-info" download=""><?php echo e(__('Download Cv')); ?></a></td>
              </tr>
              <tr class="attachment_list">
                 <td width="35%"><?php echo e(__('Applicant Selected Mail')); ?></td>
                 <td>
                     <a href="mailto:<?php echo e($apply->email); ?>" class="btn btn-primary">Send Mail</a>
 
                 </td>
              </tr>
           </tbody>
        </table>
     </div>
 
 <?php /**PATH /home/lapakgra/domains/lapakgrafi.my.id/public_html/core/resources/views/admin/job/applicant/details.blade.php ENDPATH**/ ?>