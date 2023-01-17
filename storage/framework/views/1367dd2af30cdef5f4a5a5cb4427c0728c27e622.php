<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>UESCH</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<p>Bienvenido al SISTEMA INFORMATICO DE <strong>UESCH</strong></p>
<!-- Button trigger modal -->



<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
  console.log('Hi!');
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/educa-tesis/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>