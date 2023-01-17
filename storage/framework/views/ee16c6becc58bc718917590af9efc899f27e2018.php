<?php $__env->startSection('title', __('Estudiantes')); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('listado-estudiantes', [])->html();
} elseif ($_instance->childHasBeenRendered('aVNKmkT')) {
    $componentId = $_instance->getRenderedChildComponentId('aVNKmkT');
    $componentTag = $_instance->getRenderedChildComponentTagName('aVNKmkT');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('aVNKmkT');
} else {
    $response = \Livewire\Livewire::mount('listado-estudiantes', []);
    $html = $response->html();
    $_instance->logRenderedChild('aVNKmkT', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/educa-tesis/resources/views/estudiantes/reporte.blade.php ENDPATH**/ ?>