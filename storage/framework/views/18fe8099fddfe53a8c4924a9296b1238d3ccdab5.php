<!doctype html>
<html lang="es" xml:lang="es">
    <head>
        <?php echo $__env->make('template.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('meta'); ?>
    </head>
    <body>
        <div id="page-container" class="header-navbar-fixed header-navbar-transparent">
            <!-- Header -->
            <?php echo $__env->make('template.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- END Header -->
                
            <!-- Main Container -->
            <?php echo $__env->yieldContent('contenido'); ?>
            <!-- END Main Container -->
                
            <!-- Footer -->
            <?php echo $__env->make('template.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- END Footer -->
        </div>
    <?php echo $__env->make('template.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>