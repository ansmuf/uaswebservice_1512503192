<?php
namespace App\Http\Transformers;

use League\Fractal\TransformerAbstract;
use App\Http\Models\Mahasiswa;

class TransformerMhs extends TransformerAbstract
{
  public function transform(Mahasiswa $field)
  {
    // ngubah format tampilan di postman
    return [
      'NIM' => $field->nim,
      'Nama' => $field->nama,
      'Alamat' => $field->alamat,
      'Fakultas' => $field->fakultas,
      'Program Studi' => $field->prodi,
      'Nomor Telepon' => $field->no_telp,
      'Agama' => $field->agama,
      'Peminatan' => $field->peminatan
    ];
  }
}
