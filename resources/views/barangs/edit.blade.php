@extends('layouts.tampilan')
@section('content')
<section class="page-content container-fluid">
<div class="row">
	<div class="col-md-12">
			<h3 class="card-header">Edit Data Alat Yang Disewa</h3>
			<form action="{{ route('barangs.update',$barangs->id) }}" method="post">
				{{ csrf_field() }}
				<div class="card-body">

			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
        			<input type="hidden" name="id" value="{{ request()->get('id') }}">

			  		<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Alat Yang Disewakan</label>	
			  			<input type="text" name="name" class="form-control col-sm-6" value="{{ $barangs->name }}"  required>
			  			@if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
			  		</div>

					<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
						<label class="control-label">Harga Alat Sewa</label>	
						<input type="text" name="harga" class="form-control col-sm-6" value="{{ $barangs->harga }}"  required>
						@if ($errors->has('harga'))
						  <span class="help-block">
							  <strong>{{ $errors->first('harga') }}</strong>
						  </span>
					  @endif
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