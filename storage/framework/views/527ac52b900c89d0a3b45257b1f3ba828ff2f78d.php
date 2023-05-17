<!DOCTYPE html>
<html lang="en">
    <?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
   
    <?php echo $__env->make('include.marquee', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main>
        <?php echo $__env->yieldContent('contents'); ?>
    </main>

    <?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH F:\banking\banking_app\resources\views/layouts/app.blade.php ENDPATH**/ ?>