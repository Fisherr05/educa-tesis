<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('usuarios-pendientes', [])->html();
} elseif ($_instance->childHasBeenRendered('O9n5vLj')) {
    $componentId = $_instance->getRenderedChildComponentId('O9n5vLj');
    $componentTag = $_instance->getRenderedChildComponentTagName('O9n5vLj');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('O9n5vLj');
} else {
    $response = \Livewire\Livewire::mount('usuarios-pendientes', []);
    $html = $response->html();
    $_instance->logRenderedChild('O9n5vLj', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('js/livewire.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/educa-tesis/resources/views/livewire/usuarios-pendientes/index.blade.php ENDPATH**/ ?>