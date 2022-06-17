@extends('backend.index')
@section('content')

<table class="table table-hover" id="myTable">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
  </table>

  <script>
    $(document).ready( function () {
        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('cv.index') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'nama_depan', name: 'nama_depan' },
                { data: 'email', name: 'email' },
                { data: 'action', name: 'action' },
            ]
        });
    });
</script>
@endsection

