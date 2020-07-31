@extends('layouts.admin')


@section('content')
    <!-- Begin Page Content -->
<div class="card card-info card-outline">
    <div class="card-header">
        <div class="card-tools">
            <a href="{{ route('pegawai.create')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $item->nama}}</td>
                            <td>{{ $item->jabatan->jabatan}}</td>
                            <td>{{ $item->alamat}}</td>
                            <td>{{ date('d-m-Y', strtotime($item->tgllhr))}}</td>
                            <td>
                                <a href="{{ route('pegawai.edit', $item->id)}}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('pegawai.destroy', $item->id)}}" method="post"
                                class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                            </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Data Kosong
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
  <!-- /.container-fluid -->
@endsection