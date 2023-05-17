
<?php $__env->startSection('title', 'History'); ?>
<?php $__env->startSection('contents'); ?>
<div class="card">
    <div class="text primary fs-2 text-center text-primary mt-3">
        <b class="shadow p-2 rounded background-primary">
            <?php echo e(__('Transaction History')); ?>

        </b>
    </div>
    <div class="card-body mx-5 shadow mt-5 mb-5 rounded">
        <div class="card-header text-info fs-3"><?php echo e(__('All Transaction')); ?></div>
        <table class="table table-striped p-4 text-center">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Transaction Id</th>
                    <th scope="col">Sender Name</th>
                    <th scope="col">Receiver Name</th>
                    <th scope="col">Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($transaction->id); ?></td>
                    <td><?php echo e($transaction->transactionId); ?></td>
                    <td><?php echo e($transaction->sender); ?></td>
                    <td><?php echo e($transaction->receiver); ?></td>
                    <td><?php echo e($transaction->amount); ?> <b>₹</b></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>       
        <div class="btn btn-primary float-end" onclick="history.back()">Back</div>
    </div>
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\banking\banking_app\resources\views/customer/transaction-history.blade.php ENDPATH**/ ?>