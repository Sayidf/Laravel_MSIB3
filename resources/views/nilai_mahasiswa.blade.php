@php
	$no = 1;
  $judul = ['No', 'Nama', 'Nilai', 'Keterangan'];
@endphp

<h3 align="center">Nilai Mahasiswa</h3>

<table border="1" align="center" width="40%" cellpadding="10" cellspacing="0">
  <thead>
    <tr>
      @foreach ($judul as $jdl)
        <th>{{ $jdl }}</th>
      @endforeach 
    </tr>
  </thead>
  <tbody align="center">
    @foreach ($siswa as $sis)
      @php
        $ket = ($sis['nilai'] >= 60) ? "Lulus" : "Gagal";
		    $warna = ($no % 2 == 1) ? 'green' : 'yellow';
      @endphp
      <tr bgcolor="{{ $warna }}">
      {{-- <tr> --}}
        <td>{{ $no++ }}</td>
        <td>{{ $sis['nama'] }}</td>
        <td>{{ $sis['nilai'] }}</td>
        <td>{{ $ket }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
