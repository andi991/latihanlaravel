<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Penjualan
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <?php echo $__env->make('penjualan.show_fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <a href="<?php echo route('penjualan.index'); ?>" class="btn btn-default">Back</a>
                    <a href="#" class="btn btn-primary"> <i class="fa fa-print"></i> Print</a>
                    <a href="#" class="btn btn-primary"> <i class="fa fa-edit"></i> New</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>