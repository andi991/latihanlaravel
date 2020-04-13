<?php $__env->startSection('content'); ?>
<h4 class="user-footer pull-right content-header">
        <form method="GET" action="<?php echo route('penjualan.index'); ?>">
            <input type="submit" value="cari">
            <input name="cari" type="search" placeholder="Search">
        </form>
    </h4>
<br><br><br>
    <section class="content-header">
        <h1 class="pull-left">Penjualan</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -5px;margin-left: 5px;margin-bottom: 5px" href="<?php echo route('penjualan.create'); ?>">Add New</a>
           <a class="btn btn-primary pull-right" style="margin-top: -5px;margin-left: 5px;margin-bottom: 5px" href="/cetak"><i class="fa fa-print"></i>Print</a><br><br>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    <?php echo $__env->make('penjualan.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>