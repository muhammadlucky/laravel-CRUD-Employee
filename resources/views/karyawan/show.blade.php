Tampilkan Data
<br />
@foreach ( $karyawan as $karyawanlist)
{{$karyawanlist->karyawan_id}}
{{$karyawanlist->karyawan_name}}
{{$karyawanlist->karyawan_address}}
{{$karyawanlist->telpon_karyawan}}
@endforeach
<br />
<a href="{{ url('Karyawan') }}">
Lobby ->>>
</a>