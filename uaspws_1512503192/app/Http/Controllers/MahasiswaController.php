<?php

namespace App\Http\Controllers;

use App\Http\Models\Mahasiswa;
use App\Http\Transformers\TransformerMhs;
use Dingo\Api\Http\Request;
use Dingo\Api\Routing\Helpers;
use Mockery\Exception;

class MahasiswaController extends Controller
{
    use Helpers;

    public function index(){
      $a = Mahasiswa::all();

      return $this->response->collection($a, new TransformerMhs);
    }

    public function show($nim){
      try {
        $a = Mahasiswa::find($nim);
      } catch (Exception $e) {
        return $e;
      }

      if ($a) {
        // code...
        return $this->response->item($a, new TransformerMhs);
      } else {
        // code...
        return $this->response->errorNotFound('Data Tidak Ditemukan');
      }

    }

    public function store(Request $request){
      // biar yg masuk 1 doang
      $data = $request->only([
        'nim',
        'nama',
        'alamat',
        'fakultas',
        'prodi',
        'no_telp',
        'agama',
        'peminatan'
      ]);

      // buat masuk ke database
      $a = new Mahasiswa([
        'nim' => $data['nim'],
        'nama' => $data['nama'],
        'alamat' => $data['alamat'],
        'fakultas' => $data['fakultas'],
        'prodi' => $data['prodi'],
        'no_telp' => $data['no_telp'],
        'agama' => $data['agama'],
        'peminatan' => $data['peminatan'],
      ]);

      // insert ke db
      try {
        $a->save();
      } catch (Exception $e) {
        $this->response->error($e,500);
      }

      // kirim response berhasil insert, status code 200
      $this->response->created();
    }

    public function update($nim, Request $request){
      try {
        $a = Mahasiswa::find($nim);
      } catch (Exception $e) {
        $this->response->error($e,500);
      }

      if ($a) {
        // code...
        $data = $request->only([
          'nama',
          'alamat',
          'fakultas',
          'prodi',
          'no_telp',
          'agama',
          'peminatan'
        ]);

        $a->fill([
          'nama' => $data['nama'],
          'alamat' => $data['alamat'],
          'fakultas' => $data['fakultas'],
          'prodi' => $data['prodi'],
          'no_telp' => $data['no_telp'],
          'agama' => $data['agama'],
          'peminatan' => $data['peminatan'],
        ]);
        try {
          $a->update();
        } catch (Exception $e) {
          $this->response->error($e,500);
        }
        // $this->response->error('',200);
        return response('Data Berhasil Disimpan');
      } else {
        $this->response->errorNotFound('Data Tidak Ditemukan');
      }
    }

    public function destroy($nim){
      try {
        $a = Mahasiswa::find($nim);
      } catch (Exception $e) {
        $this->response->error($e,500);
      }

      if ($a) {
        try {
          $a->delete();
        } catch (Exception $e) {
          $this->response->error($e,500);
        }

        $this->response->noContent();
      } else {
        $this->response->errorNotFound('Data Tidak Ditemukan');
      }
    }
}
