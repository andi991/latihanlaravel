<table class="table table-responsive" id="pegawais-table">
    <thead>
        <tr>
            <th>Nik</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Telp</th>
            <th>Foto</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $p->nik; ?></td>
            <td><?php echo $p->nama; ?></td>
            <td><?php echo $p->tempat_lahir; ?></td>
            <td><?php echo $p->tanggal_lahir; ?></td>
            <td><?php echo $p->alamat; ?></td>
            <td><?php echo $p->email; ?></td>
            <td><?php echo $p->telp; ?></td>
            <td><?php echo $p->foto; ?></td>
            <td>
                <?php echo Form::open(['route' => ['pegawai.destroy', $p->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('pegawai.show', [$p->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('pegawai.edit', [$p->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>