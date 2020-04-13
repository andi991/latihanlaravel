<div class="row">
    <div class="col-md-4 col-sm-4">
    <h4>Alamat</h4>
    <address>
        <p>Jalan Kresna Desa Baluk</p>
        <p>Jembrana Bali</p>
        <p>82216</p>
    </address>
    </div>
    <div class="col-md-4 col-sm-4">
        <h4>Penjualan</h4>
        <p><?php echo e($penjualan->tanggal); ?></p>
        <p>ID : <?php echo e($penjualan->id); ?> </p>
        <p>Pegawai : <?php echo e($penjualan->pegawai->nama); ?> </p>
    </div>
    <div class="col-md-4 col-sm-4">
        <h4>Pelanggan</h4>
        <p><?php echo e($penjualan->pelanggan->nama); ?></p>
        <p>Alamat : <?php echo e($penjualan->pelanggan->alamat); ?></p>
        <p>Telp : <?php echo e($penjualan->pelanggan->telp); ?></p>
    </div>
</div>
<div class="row">
    <div class="col-md-10 col-sm-10">
    <h3>Detail Penjualan</h3>
    <table class="table table-bordered">
        <tr>
            <th class="col-md-1">No</th>
            <th class="col-md-2">Kode</th>
            <th class="col-md-3">Nama</th>
            <th class="col-md-2">Jumlah</th>
            <th class="col-md-2">Sub Total</th>
        </tr>
        <?php $__currentLoopData = $penjualan->detail_penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($row + 1); ?></td>
                <td><?php echo e($item->barang($item->barang_id)->kode); ?></td>
                <td><?php echo e($item->barang($item->barang_id)->nama); ?></td>
                <td class="text-right"><?php echo e($item->jumlah); ?></td>
                <td class="text-right"><?php echo e($item->subtotal); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td colspan="4" class="text-right">Total</td>
            <td class="text-right"><?php echo e($penjualan->total); ?></td>
        </tr>
    </table>
</div>
</div>