<br />
@foreach ($supplier as $supplierlist)
{{ $supplierlist->supplier_id}}
{{ $supplierlist->supplier_name}}
{{ $supplierlist->supplier_address}}
<a href="/Supplier/{{ $supplierlist->supplier_id }}">Tampilkan</a>
<br />
<a href="/Supplier/{{ $supplierlist->supplier_id }}/edit">Ubah</a>
<br />

<form action="/Supplier/{{$supplierlist->supplier_id}}" method="post">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<button> Hapus </button>
</form>
@endforeach

<a href="{{url ('Supplier/create') }}"> Tambah Data </a>