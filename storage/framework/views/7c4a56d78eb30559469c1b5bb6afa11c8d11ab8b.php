<table class="table table-responsive" id="barangs-table">
    <thead>
        <tr>
            <th>Kode</th>
        <th>Nama</th>
        <th>Keterangan</th>
        <th>Stock</th>
        <th>Harga</th>
        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $barang->kode; ?></td>
            <td><?php echo $barang->nama; ?></td>
            <td><?php echo $barang->keterangan; ?></td>
            <td><?php echo $barang->stock; ?></td>
            <td><?php echo $barang->harga; ?></td>
            <td>
                <?php echo Form::open(['route' => ['barangs.destroy', $barang->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('barangs.show', [$barang->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('barangs.edit', [$barang->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>