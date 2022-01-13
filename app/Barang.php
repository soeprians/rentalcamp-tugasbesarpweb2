<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';
    protected $fillable = array('name','harga');

    public function transaksii() {
        return $this->hasMany('App\Transaksi', 'barang_id', 'id');
    }
}
