
<?php $__env->startSection('title', 'Money Transfer'); ?>
<?php $__env->startSection('contents'); ?>
<div class="card">
        <div class="card-body mx-5 shadow mt-5 mb-5 round-3">
            <?php if(session()->has('message')): ?>
                <div class="alert alert-success" id="alert">
                    <?php echo e(session()->get('message')); ?>

                    <button type="button" class="close float-end border-0" data-dismiss="alert"><?php echo e(__('X')); ?></button>
                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('pay')); ?>" method="POSt">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><?php echo e(__('Transaction Id')); ?></label>
                    <input type="text" name="transactionId" class="form-control" value="<?php echo e($transactionId); ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><?php echo e(__('Sender Name')); ?></label>
                    <input type="text" class="form-control" name="sender" value="<?php echo e($userDetails->name); ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><?php echo e(__('Send To')); ?></label>
                    <select name="receiver" id="" class="form-control form-select">
                        <option value="" selected><?php echo e(__('Choose Customer')); ?></option>
                        <?php $__currentLoopData = $userList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($list->name); ?>"><?php echo e($list->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['receiver'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e(__('Please Select Customer.')); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><?php echo e(__('Amount')); ?></label>
                    <input type="amount" name="amount" class="form-control">
                    <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e(__('Please enter amount.')); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
       </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\banking\banking_app\resources\views/customer/add.blade.php ENDPATH**/ ?>