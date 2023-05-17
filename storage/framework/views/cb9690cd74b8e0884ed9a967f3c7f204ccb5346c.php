<nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="<?php echo e(asset('img/icon.png')); ?>" alt="" width="50" height="45">
    </a>
    <i class="bi bi-house"></i> 
    <div class="d-flex">
        <a href="<?php echo e(url('/')); ?>"><button class="btn btn-outline-primary"><?php echo e(__('Home')); ?></button></a>
        <a href="<?php echo e(route('transaction-history')); ?>"><button class="btn btn-outline-primary mx-3"><?php echo e(__('Transactions')); ?></button></a>
    </div>
  </div>
</nav>
 <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <marquee class="">Welcome to our online banking</marquee>
</nav>
<?php /**PATH F:\banking\banking_app\resources\views/include/marquee.blade.php ENDPATH**/ ?>