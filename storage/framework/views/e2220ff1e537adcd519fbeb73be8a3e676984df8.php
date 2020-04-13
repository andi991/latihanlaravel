<li class="<?php echo e(Request::is('barangs*') ? 'active' : ''); ?>">
    <a href="<?php echo route('barangs.index'); ?>"><i class="fa fa-database"></i><span>Barang</span></a>
</li>

<li class="<?php echo e(Request::is('pelanggans*') ? 'active' : ''); ?>">
    <a href="<?php echo route('pelanggan.index'); ?>"><i class="fa fa-address-card-o"></i><span>Pelanggan</span></a>
</li>

<li class="<?php echo e(Request::is('pegawais*') ? 'active' : ''); ?>">
    <a href="<?php echo route('pegawai.index'); ?>"><i class="fa fa-user-md"></i><span>Pegawai</span></a>
</li>

<li class="<?php echo e(Request::is('penjualans*') ? 'active' : ''); ?>">
    <a href="<?php echo route('penjualan.index'); ?>"><i class="fa fa-shopping-cart"></i><span>Penjualan</span></a>
</li>

<li class="<?php echo e(Request::is('users*') ? 'active' : ''); ?>">
    <a href="<?php echo route('users.index'); ?>"><i class="fa fa-users"></i><span>User</span></a>
</li>

