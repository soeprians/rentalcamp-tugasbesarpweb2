@extends('layouts.app')
@section('content')
<section class="page-content container-fluid">
<div class="row">
	<div class="col-md-12">
			<h3 class="card-header">Edit Data Transaksi</h3>
			<form action="{{ route('transaksi.update',$transaksi->id) }}" method="post">
				{{ csrf_field() }}
				<div class="card-body">

			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
        			<input type="hidden" name="id" value="{{ request()->get('id') }}">

			  		<div class="form-group row {{ $errors->has('namepenyewa') ? ' has-error' : '' }}">
			  			<label class="col-sm-3 col-form-label">Nama Penyewa</label>
                        <div class="col-sm-7">	
			  			<input type="text" name="namepenyewa" class="form-control col-sm-6" value="{{ $transaksi->namepenyewa }}"  required>
			  			@if ($errors->has('namepenyewa'))
                            <span class="help-block">
                                <strong>{{ $errors->first('namepenyewa') }}</strong>
                            </span>
                        @endif
                        </div>
			  		</div>

					<div class="form-group row {{ $errors->has('barang_id') ? ' has-error' : '' }}">
						<label class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-7">
                        <input type="text" name="barang_id" class="form-control col-sm-6" value="{{ $transaksi->barang_id }}"  required>
						@if ($errors->has('barang_id'))
						  <span class="help-block">
							  <strong>{{ $errors->first('barang_id') }}</strong>
						  </span>
					    @endif
                        </div>
					</div>
                    
                    <div class="form-group row {{ $errors->has('no_wa') ? ' has-error' : '' }}">
						<label class="col-sm-3 col-form-label">No Whatsapp</label>
                        <div class="col-sm-7">
						<input type="text" name="no_wa" class="form-control col-sm-6" value="{{ $transaksi->no_wa }}"  required>
						@if ($errors->has('no_wa'))
						  <span class="help-block">
							  <strong>{{ $errors->first('no_wa') }}</strong>
						  </span>
					    @endif
                        </div>
					</div>

                    <div class="form-group row {{ $errors->has('gmail') ? ' has-error' : '' }}">
						<label class="col-sm-3 col-form-label">Gmail</label>
                        <div class="col-sm-7">	
						<input type="text" name="gmail" class="form-control col-sm-6" value="{{ $transaksi->gmail }}"  required>
						@if ($errors->has('gmail'))
						  <span class="help-block">
							  <strong>{{ $errors->first('gmail') }}</strong>
						  </span>
					    @endif
                        </div>
					</div>

                    <div class="form-group row {{ $errors->has('tgl_sewa') ? ' has-error' : '' }}">
                        <label class="col-sm-3 col-form-label">Tanggal Sewa</label>
                        <div class="col-sm-7">
                        <input type="date" name="tgl_sewa" class="form-control col-sm-6" value="{{ $transaksi->tgl_sewa }}"  required> 
                        @if ($errors->has('tgl_sewa'))
                          <span class="help-block">
                              <strong>{{ $errors->first('tgl_sewa') }}</strong>
                          </span>
                        @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="validationCustom03" class="col-sm-3 col-form-label">
                            Status
                        </label>
                        <div class="col-sm-3">
                        <select name="status" class="form-control" >
                           <option value="">-Select-</option>
                           <option value="Sudah Dibayar">Sudah Dibayar</option>
                           <option value="Sedang Disewa">Sedang Disewa</option>
                           <option value="Sudah Dikembalikan">Sudah Dikembalikan</option>
                        </select>
                        @if ($errors->has('status'))
                            <span class="help-block">
                                <strong>{{ $errors->first('status') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>

			  		<div class="form-group">
						<div class="">
							<button type="reset" class="btn btn-secondary">
								<i class="fa fa-undo"></i>&nbsp;&nbsp;Reset</button>
								<button type="submit" class="btn btn-success">
									<i class="fas fa-check fa-md"></i>&nbsp;&nbsp;Simpan
								</button>
						</div>
					</div>
			  	</div>
			</form>
	</div>
</div>
</section>
@endsection