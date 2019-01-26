@extends('layouts/sb-admin')

@section ('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Customer</h1>
                </div>
            </div>
            <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id Customer</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($customer as $customerlist)
                                    <tr class="odd gradeX">
                                        <td class="center">{{ $customerlist->customer_id}}</td>
                                        <td class="center">{{ $customerlist->name}}</td>
                                        <td class="center">{{ $customerlist->address}}</td>
                                        <td>
                                        <a class="btn btn-warning" href="/Customer/{{ $customerlist->customer_id }}">Tampilkan</a>
                                        
                                        <a class="btn btn-success" href="/Customer/{{ $customerlist->customer_id }}/edit">Ubah</a>
                                        </td>
                                        <td>
                                        <form  action="/Customer/{{$customerlist->customer_id}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger"> Hapus </button>
                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{url ('Customer/create') }}"> <button class="btn btn-info"> Tambah data </button> </a>
                            </div>
                            </div>
@endsection