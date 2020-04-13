<!-- Nik Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nik', 'Nik:'); ?>

    <?php echo Form::text('nik', null, ['class' => 'form-control']); ?>

</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nama', 'Nama:'); ?>

    <?php echo Form::text('nama', null, ['class' => 'form-control']); ?>

</div>

<!-- Tempat Lahir Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tempat_lahir', 'Tempat Lahir:'); ?>

    <?php echo Form::text('tempat_lahir', null, ['class' => 'form-control']); ?>

</div>

<!-- Tanggal Lahir Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tanggal_lahir', 'Tanggal Lahir:'); ?>

    <?php echo Form::date('tanggal_lahir', null, ['class' => 'form-control']); ?>

</div>

<!-- Alamat Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('alamat', 'Alamat:'); ?>

    <?php echo Form::textarea('alamat', null, ['class' => 'form-control']); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

</div>

<!-- Telp Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('telp', 'Telp:'); ?>

    <?php echo Form::text('telp', null, ['class' => 'form-control']); ?>

</div>

<!-- Foto Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('foto', 'Foto:'); ?>

    <?php echo Form::file('foto'); ?>

    <?php if(isset($pegawai)): ?>
            <p><img style="width: 200px" src="<?php echo e(asset("images/".$pegawai->foto)); ?>" alt="" class="img img-thumbnail"></p>
    <?php endif; ?>

</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('pegawai.index'); ?>" class="btn btn-default">Cancel</a>
</div>
