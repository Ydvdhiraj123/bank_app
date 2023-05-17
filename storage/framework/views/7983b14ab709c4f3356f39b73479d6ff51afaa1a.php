
<?php $__env->startSection('title', 'Single View'); ?>
<?php $__env->startSection('contents'); ?>
<div class="card">
    <div class="text primary fs-2 text-center text-primary mt-3">
        <b class="shadow p-2 rounded background-primary">
            <?php echo e(__('Customer View')); ?>

        </b>
    </div>
    <div class="card-body mx-5 shadow mt-5 mb-5 rounded">
        <div class="card-header text-info fs-3"><?php echo e(__('Customer Detail')); ?></div>
        <table class="table table-striped p-4 text-center">
            <tbody>
                    <tr>
                        <th><?php echo e(__('Name')); ?></th>
                        <td><?php echo e($userDetails->name); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(__('Email')); ?></th>
                        <td><?php echo e($userDetails->email); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(__('Money')); ?></th>
                        <td><?php echo e($userDetails->balance); ?><b>₹</b></td>
                    </tr>
            </tbody>
        </table>
        <div class="btn btn-primary float-end" onclick="history.back()">Back</div>      
    </div> 
    <div class="m-3"></div>
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\banking\banking_app\resources\views/customer/customer-single-view.blade.php ENDPATH**/ ?>