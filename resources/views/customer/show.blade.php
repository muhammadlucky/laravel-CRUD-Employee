Tampilkan Data
<br />
@foreach ( $customer as $customerlist)
{{$customerlist->customer_id}}
{{$customerlist->name}}
{{$customerlist->address}}
@endforeach
<br />
<a href="{{ url('Customer') }}">
Lobby ->>>
</a>