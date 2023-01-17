<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('temarios')->html();
} elseif ($_instance->childHasBeenRendered('YuPrMMc')) {
    $componentId = $_instance->getRenderedChildComponentId('YuPrMMc');
    $componentTag = $_instance->getRenderedChildComponentTagName('YuPrMMc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('YuPrMMc');
} else {
    $response = \Livewire\Livewire::mount('temarios');
    $html = $response->html();
    $_instance->logRenderedChild('YuPrMMc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/educa-tesis/resources/views/livewire/temarios/index.blade.php ENDPATH**/ ?>