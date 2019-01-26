<br />
@foreach ($karyawan as $karyawanlist)
{{ $karyawanlist->karyawan_id}}
{{ $karyawanlist->karyawan_name}}
{{ $karyawanlist->karyawan_address}}
{{ $karyawanlist->telpon_karyawan}}
<a href="/Karyawan/{{ $karyawanlist->karyawan_id }}">Tampilkan</a>
<br />
<a href="/Karyawan/{{ $karyawanlist->karyawan_id }}/edit">Ubah</a>
<br />

<form action="/Karyawan/{{$karyawanlist->karyawan_id}}" method="post">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<button> Hapus </button>
</form>
@endforeach

<a href="{{url ('Karyawan/create') }}"> Tambah Data</a>