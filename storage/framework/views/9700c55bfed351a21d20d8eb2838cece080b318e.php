<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('password', 'Password:'); ?>

    <?php echo Form::password('password', ['class' => 'form-control']); ?>

</div>


<!-- Level Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('level', 'Level:'); ?>

    <?php echo Form::select('level',[0=>'User',1=>'Superadmin'], null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('users.index'); ?>" class="btn btn-default">Cancel</a>
</div>
