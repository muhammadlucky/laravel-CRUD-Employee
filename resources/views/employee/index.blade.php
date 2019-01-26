@extends('layouts/sb-admin')

@section ('content')
<title>TOKO BUAH</title>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Employee</h1>
                </div>
            </div>
            <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-body">
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
                                    <tr class="odd gradeX">
                                        <td class="center">{{ $employeelist->employee_id}}</td>
                                        <td class="center">{{ $employeelist->employee_name}}</td>
                                        <td class="center">{{ $employeelist->employee_address}}</td>
                                        <td class="center"> {{ $employeelist->employee_phone_number}}</td>
                                        <td>
                                        <a class="btn btn-warning" href="/Employee/{{ $employeelist->employee_id }}">Tampilkan</a>
                                        
                                        <a class="btn btn-success" href="/Employee/{{ $employeelist->employee_id }}/edit">Ubah</a>
                                        </td>
                                        <td>
                                        <form  action="/Employee/{{$employeelist->employee_id}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger"> Hapus </button>
                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{url ('Employee/create') }}"> <button class="btn btn-info"> Tambah data </button> </a>
                            </div>
                            </div>
@endsection