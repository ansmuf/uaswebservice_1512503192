<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
  use SoftDeletes;

  protected $primaryKey = 'nim';
  public $incrementing = false;

  protected $fillable = [
    'nim',
    'nama',
    'alamat',
    'fakultas',
    'prodi',
    'no_telp',
    'agama',
    'peminatan'
  ];

  // protected $guarded = ['Id'];
}
