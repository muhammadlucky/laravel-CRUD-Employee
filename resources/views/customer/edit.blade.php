
@foreach($customer as $customerlist)
<form action="{{ route('Customer.update', 
    $customerlist->customer_id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
        <input type="text" 
        name="txt_id"
        value="{{ $customerlist->customer_id }}"/>
        <br />

        <input type="text" 
        name="txt_name" 
        value="{{ $customerlist->name }}"/>
        <br />

        <input type="text" 
        name="txt_address" 
        value="{{ $customerlist->address }}"/>
        <br />
@endforeach
    <button type="submit">Submit</button>