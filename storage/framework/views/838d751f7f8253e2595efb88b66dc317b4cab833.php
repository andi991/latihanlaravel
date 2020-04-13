<!-- Kode Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('kode', 'Kode:'); ?>

    <?php echo Form::text('kode', null, ['class' => 'form-control']); ?>

</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nama', 'Nama:'); ?>

    <?php echo Form::text('nama', null, ['class' => 'form-control']); ?>

</div>
<!-- Keterangan Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('keterangan', 'Keterangan:'); ?>

     <?php echo Form::textarea('keterangan', null, ['class' => 'form-control']); ?>    
</div>
<!-- Stock Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('stock', 'Stock:'); ?>

    <?php echo Form::text('stock', null, ['class' => 'form-control']); ?>

</div>

<!-- Harga Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('harga', 'Harga:'); ?>

    <?php echo Form::text('harga', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('barangs.index'); ?>" class="btn btn-default">Cancel</a>
</div>
