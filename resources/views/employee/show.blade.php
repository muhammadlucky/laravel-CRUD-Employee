
@extends('layouts/sb-admin')

@section ('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page header">Menampilakn Data Employee</h1>
        </div>
    </div>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                        <th>Id Employee</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Nomer HandPhone</th>
                                        <th>Action</th>
                        </tr>
                    </thead>
    <tbody>
    @foreach ($employee as $employeelist)
        <tr class="odd gradex">
        <td class="center">{{$employeelist->employee_id}}</td>
        <td class="center">{{$employeelist->employee_name}}</td>
        <td class="center">{{$employeelist->employee_address}}</td>
        <td class="center">{{$employeelist->employee_phone_number}}</td>
        <td>
        <a class="btn btn-warning" href="{{ url('Employee') }}" >Kembali</a>
        </td>
        </tr>    
@endforeach    
</tbody>
</table>
</div>
</div>
@endsection