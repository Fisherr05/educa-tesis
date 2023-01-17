<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cualidades')->html();
} elseif ($_instance->childHasBeenRendered('LLzxScb')) {
    $componentId = $_instance->getRenderedChildComponentId('LLzxScb');
    $componentTag = $_instance->getRenderedChildComponentTagName('LLzxScb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LLzxScb');
} else {
    $response = \Livewire\Livewire::mount('cualidades');
    $html = $response->html();
    $_instance->logRenderedChild('LLzxScb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/educa-tesis/resources/views/livewire/cualidades/index.blade.php ENDPATH**/ ?>