@extends('layouts.master')

@section('title','Lokasi')

@section('conten')

		<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Tambah Reward</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Tambah Reward</h5>
									</div>
									<hr/>
                        <form method="POST" action="{{ url('admin/storereward') }}" enctype="multipart/form-data">
                        @csrf
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Nama Reward</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" id="inputEnterYourName" placeholder="Nama Reward">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Point Reedem</label>
										<div class="col-sm-9">
											<input type="text" name="point" class="form-control" id="inputEnterYourName" placeholder="Point">
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Keterangan</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputEnterYourName" name="keterangan" placeholder="Keterangan">
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Gambar Voucher</label>
										<div class="col-sm-9">
											<input type="file" class="form-control" id="file" name="file" required autocomplete="file">
										</div>
									</div>
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-info px-5">simpan</button>
										</div>
									</div>
                        </form>
								</div>
							</div>
						</div>
					</div>
				</div>

@endsection
