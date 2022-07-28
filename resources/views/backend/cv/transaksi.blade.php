@extends('backend.index')
@section('content')
<div class="col">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Waktu pemesanan</th>
            <th scope="col">User</th>
            <th scope="col">Template</th>
            <th scope="col">Reference</th>
            <th scope="col">Total</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($transaksi as $tr)
              {{-- @php
                dd($loop);
              @endphp --}}
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$tr->created_at}}</td>
            <td>{{$tr->user->name}}</td>
            <td>{{$tr->template->nama}}</td>
            <td>{{$tr->reference}}</td>
            <td>{{$tr->total}}</td>
            
            @if ($tr->status == "paid")
                <td><span class="badge text-bg-success">{{$tr->status}}</span></td>
            @else
                <td><span class="badge text-bg-danger">{{$tr->status}}</span></td>
            @endif
            
          </tr>
        
          @endforeach
        </tbody>
      </table>
</div>
@endsection