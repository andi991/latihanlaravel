<table class="table table-responsive" id="penjualans-table">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Pelanggan</th>
            <th>Pegawai</th>
            <th>Total</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $pen->tanggal; ?></td>
            <td><?php echo $pen->pelanggan->nama; ?></td>
            <td><?php echo $pen->pegawai->nama; ?></td>
            <td><?php echo $pen->total; ?></td>
            <td>
                <?php echo Form::open(['route' => ['penjualan.destroy', $pen->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('penjualan.show', [$pen->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('penjualan.edit', [$pen->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>