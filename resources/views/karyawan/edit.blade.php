
@foreach($karyawan as $karyawanlist)
<form action="{{ route('Karyawan.update', 
    $karyawanlist->karyawan_id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
        <input type="text" 
        name="txt_id"
        value="{{ $karyawanlist->karyawan_id }}"/>
        <br />

        <input type="text" 
        name="txt_name" 
        value="{{ $karyawanlist->karyawan_name }}"/>
        <br />

        <input type="text" 
        name="txt_address" 
        value="{{ $karyawanlist->karyawan_address }}"/>
        <br />

        <input type="text" 
        name="txt_telpon" 
        value="{{ $karyawanlist->telpon_karyawan }}"/>
        <br />
@endforeach
    <button type="submit">Submit</button>