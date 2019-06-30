@extends('layout')
@section('title')
  mhs daftar
@endsection
@section('css')
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
      <!-- /.box -->

      <div class="box">
        <div class="box-header">
          <a href="{{ route('mahasiswa_tambah') }}" class="btn btn-primary">Tambah</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form id="formDelete" action="{{ route('mahasiswa_hapus') }}" method="post">
            @csrf
          </form>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
           <tr>
              <td>Nama</td>
              <td>Jenis Kelamin</td>
              <td>Jurusan</td>
              <td>Aksi</td>
            </tr>
            <tbody>
            @foreach($dataMhs as $row)
            <tr>
              <td>{{ $row->nama }}</td>
              <td>{{ $row->jenis_kelamin }}</td>
              <td>{{ $row->jurusan }}</td>
              <td>
                <a href="{{ route('mahasiswa_edit', ['id' => $row->id ]) }}" class="btn btn-primary">Edit</a> | 
                <button form="formDelete" name="id" value="{{ $row->id }}" type="submit" class="btn btn-danger">Delete</button>
                
              </td>
            </tr>
            @endforeach  
            </tbody>
<!--             <tfoot>
<tr>
  <th>Rendering engine</th>
  <th>Browser</th>
  <th>Platform(s)</th>
  <th>CSS grade</th>
</tr>
</tfoot> -->
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
        <!-- /.col -->
</div>
@endsection
@section('js')
  <!-- DataTables -->
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection