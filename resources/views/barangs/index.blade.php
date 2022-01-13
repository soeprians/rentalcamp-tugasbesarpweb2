@extends('layouts.app')
@section('content')

<section class="page-content container-fluid">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12"><br>
            @if(session()->get('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
            @endif
            <div class="card-body">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="m-0 font-weight-bold text-primary">Data Alat Yang Disewa
                        </h4>
                        <br>
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#databarang">
                            <i class="fa fa-file"></i>&nbsp;&nbsp;Tambah Data
                        </button>
                        <div class="modal fade" id="databarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
                            <div class="modal-dialog middle" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            Tambah Data
                                        </h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <form method="POST" action="{{ route('barangs.store') }}">
                                        {{ csrf_field() }}
                                        <div class="col-sm-12 py-1">
                                            <div class="form-group row">
                                                <label for="validationCustom02" class="col-sm-3 col-form-label">
                                                    Nama Alat Sewa
                                                </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="validationCustom02" name="name" placeholder="Masukan Nama Barang" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                                                    @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom02" class="col-sm-3 col-form-label">
                                                    Harga Alat Sewa
                                                </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="validationCustom02" name="harga" placeholder="Masukan Harga Barang" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="reset" class="btn btn-danger">
                                                    <i class="fa fa-undo"></i>
                                                    &nbsp;&nbsp;Reset
                                                </button>
                                                <button type="submit" class="btn btn-success">
                                                    <i class="fas fa-check fa-md"></i>
                                                    Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a href="printkeluargapenerima.php" class=" btn btn-success" target="_blank">
                            <i class="fa fa-print"></i>&nbsp;&nbsp;Print
                        </a> 
                               
                    </div>
                        <div class="row">
                             <div class="col-md-12">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Alat Yang Disewa</th>
                                                    <th>Harga Alat Sewa</th>
                                                    <th>action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach($barangs as $data)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{$data->name}}</td>                                                    
                                                    <td>{{$data->harga}}</td>

                                                    <td>
                                                        <form action="{{ route('barangs.destroy', $data->id) }}"method="POST">
                                                            @csrf @method('delete')
                                                            <a href="{{ route('barangs.edit',$data->id) }}" class="btn btn-warning">
                                                                <i class="far fa-edit"></i>&nbsp;&nbsp;Edit</a>
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Ingin Menghapus Data?')">
                                                                <i class="fa fa-trash"></i>&nbsp;&nbsp;Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection