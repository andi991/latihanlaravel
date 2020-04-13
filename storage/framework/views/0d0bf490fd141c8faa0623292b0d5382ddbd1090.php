<?php $__env->startSection('content'); ?>
<h4 class="user-footer pull-right content-header">
        <form method="GET" action="<?php echo route('barangs.index'); ?>">
            <input type="submit" value="cari">
            <input name="cari" type="search" placeholder="Search">
        </form>
    </h4>
<br><br><br>
    <section class="content-header">
        <h1 class="pull-left">Barang</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('barangs.create'); ?>">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    <?php echo $__env->make('barangs.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>