<?php $__env->startSection('plugins.Select2-Bootstrap4', true); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('docentes')->html();
} elseif ($_instance->childHasBeenRendered('BLON1uO')) {
    $componentId = $_instance->getRenderedChildComponentId('BLON1uO');
    $componentTag = $_instance->getRenderedChildComponentTagName('BLON1uO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('BLON1uO');
} else {
    $response = \Livewire\Livewire::mount('docentes');
    $html = $response->html();
    $_instance->logRenderedChild('BLON1uO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('plugins.Select2', true); ?>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('js/livewire.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/educa-tesis/resources/views/livewire/docentes/index.blade.php ENDPATH**/ ?>