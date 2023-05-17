
<?php $__env->startSection('title', 'Customer List'); ?>
<?php $__env->startSection('contents'); ?>
<div class="card">
    <div class="text primary fs-2 text-center text-primary mt-3">
        <b class="shadow p-2 rounded background-primary">
            <?php echo e(__('Customer List')); ?>

        </b>
    </div>
    <div class="card-body mx-5 shadow mt-5 mb-5 rounded">
        <div class="card-header text-info fs-3"><?php echo e(__('All Customers')); ?></div>
        <table class="table table-striped p-4 text-center">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope=" "><?php echo e($user->id); ?></th>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->balance); ?><b>₹</b></td>
                        <td>
                            <a href="<?php echo e(route('customer-detail', $user->id)); ?>"><button class="btn btn-outline-primary">View</button></a>
                            <a href="<?php echo e(route('money-transfer', $user->id)); ?>"><button class="btn btn-outline-success">Pay</button></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>       
        <div class="btn btn-primary float-end" onclick="history.back()">Back</div>
    </div>
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\banking\banking_app\resources\views/customer/customer-list.blade.php ENDPATH**/ ?>