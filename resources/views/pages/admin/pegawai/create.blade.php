@extends('layouts.admin')


@section('content')
    <!-- Begin Page Content -->
    <div class="d-sm-flex align-items center justify-content-between mb-4 ml-2">
        <h1 class="h3 mb-0 text-gray-800">Tambah Pegawai</h1>
    </div>
    <div class="card card-info card-outline">
    <div class="row">
        <div class="card-body">
            <form action="{{ route('pegawai.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" value="{{ old('nama')}}" name="nama" class="form-control" placeholder="Nama Pegawai">
                </div>
                <div class="form-group">
                    <select class="form-control select2" style="width: 100;" value="{{ old('jabatan_id')}}" name="jabatan_id">
                        <option disabled value>Pilih Jabatan</option>
                    @foreach ($jab as $item)
                        <option value="{{ $item->id }}">{{ $item->jabatan }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <textarea name="alamat" value="{{ old('alamat')}}" class="form-control" placeholder="Alamat Pegawai"></textarea>
                </div>
                <div class="form-group">
                    <input type="date" value="{{ old('tgllhr')}}" name="tgllhr" class="form-control">
                </div>
                <div class="form-group">
                    <select class="form-control select2" style="width: 100;" value="{{ old('agama_id')}}" name="agama_id">
                        <option disabled value>Pilih Agama</option>
                    @foreach ($aga as $item)
                        <option value="{{ $item->id }}">{{ $item->agama }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control select2" style="width: 100;" value="{{ old('gaji_pokok_id')}}" name="gaji_pokok_id">
                        <option disabled value>Pilih Gaji</option>
                    @foreach ($gaji as $item)
                        <option value="{{ $item->id }}">{{ $item->gaji_pokok }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                </div>
        </div>
    </div>
</div>
  <!-- /.container-fluid -->
@endsection