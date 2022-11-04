<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller{
  public function dataMahasiswa(){
  	$m1 = 'Budi Santoso'; $am1 = 'Bandung';
  	$m2 = 'Siti Aminah'; $am2 = 'Tanjung Enim';

  	return view('daftar_mahasiswa',
  	  compact('m1', 'am1', 'm2', 'am2')
  	);
  }
  
  public function nilaiMahasiswa(){
  	$m1 = ['nama' => 'Fawwaz', 'nilai' => 85];
  	$m2 = ['nama' => 'Bedu', 'nilai' => 58];
  	$m3 = ['nama' => 'Siti', 'nilai' => 95];
  	$m4 = ['nama' => 'Deden', 'nilai' => 30];

    $siswa = [$m1, $m2, $m3, $m4];
      
  	return view('nilai_mahasiswa',
    	compact('siswa')
  	);
  }
}
