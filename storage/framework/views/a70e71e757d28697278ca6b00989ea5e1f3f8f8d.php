<table class="table table-bordered table-sm">
    <thead class="thead">
        <tr>
            <td>#</td>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Nivel</th>
            <th>Paralelo</th>
            <td>ACCIONES</td>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $estudiantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($row->nombres); ?></td>
                <td><?php echo e($row->apellidos); ?></td>
                <td><?php echo e($row->nivel); ?> </td>
                <td><?php echo e($row->paralelo); ?></td>
                <td>
                    
                </td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php /**PATH /opt/lampp/htdocs/educa-tesis/resources/views/livewire/estudiantes/listado.blade.php ENDPATH**/ ?>