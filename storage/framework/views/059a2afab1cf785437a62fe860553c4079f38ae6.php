
<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('contents'); ?>
        <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="<?php echo e(asset('img/icon.png')); ?>"  alt="" width="100" height="90">
            <h1 class="display-5 fw-bold">Mobile Banking App</h1>
            <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Payment makes easy and fast online.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="<?php echo e(route('customer-list')); ?>"><button type="button" class="btn btn-outline-primary btn-lg px-4 gap-3">Our Customers </button></a>
                <a href="<?php echo e(route('transaction-history')); ?>"><button type="button" class="btn btn-outline-info btn-lg px-4">Transaction History</button></a>
            </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\banking\banking_app\resources\views/customer/index.blade.php ENDPATH**/ ?>