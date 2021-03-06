<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';
    protected $fillable = array('name','harga');

    public function transaksi(){
    	return $this->hasmany('App\Transaksi');
	}
}
