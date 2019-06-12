<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = 'tbl_buku';
    protected $fillable = ['judul','nama_pengarang','penerbit','tahunterbit'];
}
