<br />
@foreach ($product as $productlist)
{{ $productlist->product_id}}
{{ $productlist->name}}
{{ $productlist->price}}
{{ $productlist->image}}
{{ $productlist->description}}
<br />
@endforeach

<a href="{{url ('Product/create') }}"> Tambah </a>