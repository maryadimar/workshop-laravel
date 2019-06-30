@extends('layout')
@section('title')
  mhs daftar
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <form role="form" method="POST" action="{{ route('mahasiswa_update') }}">
          @csrf
          <input type="hidden" name="id" value="{{ $data->id }}">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" name="nama" class="form-control" value="{{ $data->nama }}" placeholder="Nama">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control">
                <option value="L" {{ $data->jenis_kelamin == "L" ? 'selected' : '' }}>Laki - laki</option>
                <option value="P" {{ $data->jenis_kelamin == "P" ? 'selected' : '' }}>Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Jurusan</label>
              <select name="jurusan" class="form-control">
                <option value="ABC" {{ $data->jurusan == "ABC" ? 'selected' : '' }}>ABC</option>
                <option value="DCB"
                  @if($data->jurusan == "DCB")
                  selected
                  @endif>
                  DCB</option>
              </select>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
        </form>      <!-- /.box -->
    </div>
        <!-- /.box-body -->
</div>
        <!-- /.col -->
</div>
@endsection
