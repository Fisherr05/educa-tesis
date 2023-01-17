<!-- Start header -->

<header class="top-header">
    <nav class="navbar header-nav navbar-light navbar-expand-md" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="<?php echo e(asset('main/images/logo.png')); ?>" alt="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
                aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                    <li><a class="nav-link active" href="<?php echo e(url('/')); ?>">Principal</a></li>
                    <li><a class="nav-link" href="<?php echo e(url('/info')); ?>">Informacion</a></li>
                    <li><a class="nav-link" href="<?php echo e(url('/unidadeducativa')); ?>">Unidad Educativa</a></li>
                    <li><a class="nav-link" href="<?php echo e(url('/cursos')); ?>">Cursos</a></li>

                    <?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                            <li><a class="nav-link" href="<?php echo e(route('dashboard')); ?>">UESCH</a></li>
                        <?php else: ?>
                            <li><a class="nav-link" href="<?php echo e(url('/login')); ?>">Iniciar Sesión</a></li>
                            <li><a class="nav-link" href="<?php echo e(url('/register')); ?>">Registrarse</a></li>
                            
                        <?php endif; ?>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->
<?php /**PATH /opt/lampp/htdocs/educa-tesis/resources/views/main/layouts/header.blade.php ENDPATH**/ ?>