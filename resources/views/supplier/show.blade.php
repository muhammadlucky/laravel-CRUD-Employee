Tampilkan Data
<br />
@foreach ( $supplier as $supplierlist)
{{$supplierlist->supplier_id}}
{{$supplierlist->supplier_name}}
{{$supplierlist->supplier_address}}
@endforeach
<br />
<a href="{{ url('Supplier') }}">
Lobby ->>>
</a>