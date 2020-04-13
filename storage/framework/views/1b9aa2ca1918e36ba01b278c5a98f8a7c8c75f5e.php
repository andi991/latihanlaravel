<table class="table table-responsive" id="pelanggans-table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $pelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $p->nama; ?></td>
            <td><?php echo $p->alamat; ?></td>
            <td><?php echo $p->telp; ?></td>
            <td>
                <?php echo Form::open(['route' => ['pelanggan.destroy', $p->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('pelanggan.show', [$p->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('pelanggan.edit', [$p->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>