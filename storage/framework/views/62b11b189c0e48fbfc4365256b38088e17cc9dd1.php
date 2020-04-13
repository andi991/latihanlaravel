<!-- Nama Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nama', 'Nama:'); ?>

    <?php echo Form::text('nama', null, ['class' => 'form-control']); ?>

</div>

<!-- Alamat Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('alamat', 'Alamat:'); ?>

    <?php echo Form::textarea('alamat', null, ['class' => 'form-control']); ?>

</div>

<!-- Telp Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('telp', 'Telp:'); ?>

    <?php echo Form::text('telp', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('pelanggan.index'); ?>" class="btn btn-default">Cancel</a>
</div>
