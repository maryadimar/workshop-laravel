@extends('layout')
@section('title')
  mhs daftar
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <form role="form" method="post" action="{{ route('mahasiswa_simpan') }}">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control">
                <option value="L">Laki - laki</option>
                <option value="P">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Jurusan</label>
              <select name="jurusan" class="form-control">
                <option value="ABC">ABC</option>
                <option value="DCB">DCB</option>
              </select>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>      <!-- /.box -->
    </div>
        <!-- /.box-body -->
</div>
        <!-- /.col -->
</div>
@endsection
