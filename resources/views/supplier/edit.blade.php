
@foreach($supplier as $supplierlist)
<form action="{{ route('Supplier.update', 
    $supplierlist->supplier_id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
        <input type="text" 
        name="txt_id"
        value="{{ $supplierlist->supplier_id }}"/>
        <br />

        <input type="text" 
        name="txt_name" 
        value="{{ $supplierlist->supplier_name }}"/>
        <br />

        <input type="text" 
        name="txt_address" 
        value="{{ $supplierlist->supplier_address }}"/>
        <br />
@endforeach
    <button type="submit">Submit</button>