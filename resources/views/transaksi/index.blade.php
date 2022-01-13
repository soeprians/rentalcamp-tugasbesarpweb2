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
                        <h4 class="m-0 font-weight-bold text-primary">Data Transaksi
                        </h4>
                        <br>
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#datatransaksi">
                            <i class="fa fa-file"></i>&nbsp;&nbsp;Tambah Data
                        </button>
                        <div class="modal fade" id="datatransaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
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
                                    <form method="POST" action="{{ route('transaksi.store') }}">
                                        {{ csrf_field() }}
                                        <div class="col-sm-12 py-1">
                                            <div class="form-group row">
                                                <label for="validationCustom02" class="col-sm-3 col-form-label">
                                                    Nama Penyewa
                                                </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="validationCustom02" name="namepenyewa" placeholder="Masukan Nama Penyewa" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                                                    @if ($errors->has('namepenyewa'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('namepenyewa') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom02" class="col-sm-3 col-form-label">
                                                    Nama Barang
                                                </label>
                                                <div class="form-group">
                                                    <select name="barang_id" id="form-control">
                                                        @foreach ($barang as $barangis)
                                                            <option value="{{$barangis->id}}">{{$barangis->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                        </div>
                                            <div class="form-group row">
                                                    <label for="validationCustom02" class="col-sm-3 col-form-label">
                                                        No. WA
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="validationCustom02" name="no_wa" placeholder="Masukan No Whatsapp" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                                                        @if ($errors->has('no_wa'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('no_wa') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom02" class="col-sm-3 col-form-label">
                                                    Gmail
                                                </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="validationCustom02" name="gmail" placeholder="Masukan Gmail" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                                                    @if ($errors->has('gmail'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('gmail') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom02" class="col-sm-3 col-form-label">
                                                    Tgl Sewa
                                                </label>
                                                &nbsp;&nbsp;&nbsp<div class="form-group {{ $errors->has('tgl_sewa') ? ' has-error' : '' }}">	
                                                    <input type="date" name="tgl_sewa" class="form-control"  required>
                                                    @if ($errors->has('tgl_sewa'))
                                                      <span class="help-block">
                                                          <strong>{{ $errors->first('tgl_sewa') }}</strong>
                                                      </span>
                                                  @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom02" class="col-sm-3 col-form-label">
                                                    Bukti Transaksi
                                                </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="validationCustom02" name="bukti" placeholder="Masukan Bukti Transaksi" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                                                    @if ($errors->has('bukti'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('bukti') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom03" class="col-sm-3 col-form-label">
                                                    Status
                                                </label>
                                                <div class="col-sm-9">
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
                                                <tr style='text-align:center;vertical-align:middle' align="center" valign="center">
                                                    <th>No</th>
                                                    <th>Nama Penyewa</th>
                                                    <th>Nama Barang</th>
                                                    <th>No Whatsapp</th>
                                                    <th>Gmail</th>
                                                    <th>Tgl Sewa</th>
                                                    <th>Bukti Transaksi</th>
                                                    <th>Status</th>
                                                    <th>action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach($transaksi as $data)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{$data->namepenyewa}}</td>
                                                    <td>{{$data->barang->name}}</td>              
                                                    <td>{{$data->no_wa}}</td>
                                                    <td>{{$data->gmail}}</td>
                                                    <td>{{$data->tgl_sewa}}</td>
                                                    <td>{{$data->bukti}}</td>
                                                    <td>{{$data->status}}</td>
                                                    <td>
                                                        <form action="{{ route('transaksi.destroy', $data->id) }}"method="POST">
                                                            @csrf @method('delete')
                                                            <a href="{{ route('transaksi.edit',$data->id) }}" class="btn btn-warning">
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