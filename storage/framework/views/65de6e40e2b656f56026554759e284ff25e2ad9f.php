<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $spisoks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Имя</th>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/ygaxedir/cykssgu-m1/resources/views//mygroup.blade.php ENDPATH**/ ?>