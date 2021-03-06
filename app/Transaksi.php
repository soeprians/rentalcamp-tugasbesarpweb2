<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';
    protected $fillable = array('namepenyewa','barang_id','no_wa','gmail','tgl_sewa','bukti','status');

    public function barang(){
    	return $this->belongsTo(barang::class,'barang_id','id');
	}
}