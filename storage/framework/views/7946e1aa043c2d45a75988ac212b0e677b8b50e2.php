

<?php $__env->startSection('title','Tabungan'); ?>

<?php $__env->startSection('conten'); ?>
    
		<h6 class="mb-0 text-uppercase" align="center">Tabungan</h6>
        <table>
            <tr>
                <td>NIK </td>
                <td>:</td>
                <td><?php echo e($nasabah->nik); ?></td>
            </tr>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><?php echo e($nasabah->nama_nasabah); ?></td>
            </tr>
        </table>
		<hr/>

        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">

           <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-danger">
               <div class="card-body">
                   <div class="d-flex align-items-center">
                       <div>
                           <p class="mb-0 text-secondary">Saldo Anda</p>
                           <h4 class="my-1 text-danger">Rp. <?php echo $saldo; ?></h4>
                       </div>
                       <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='bx bxs-wallet'></i>
                       </div>
                   </div>
               </div>
            </div>
          </div>
        
        </div><!--end row-->

		<div class="card">
			<div class="card-body">
							<div class="table-responsive">
								<table id="example2" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>Tanggal Penarikan</th>
											<th>Kredit</th>
											<th>Debit</th>
										</tr>
									</thead>
									<tbody>
									<?php $__currentLoopData = $tarik; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td><?php echo e($tar->tgl_tab); ?></td>
											<td><?php echo e($tar->kredit); ?></td>
											<td><?php echo e($tar->debit); ?></td>
										</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
									</tbody>
								</table>

					</div>
			</div>
		</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bank-sampah\resources\views/admin/lihattabungan.blade.php ENDPATH**/ ?>