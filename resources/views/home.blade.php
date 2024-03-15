@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Tabel User</h4>
        </div>
        <div class="card-body">
      </div>
            <table class="table table-bordered table-hover" id="table_id">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Created_at</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($data as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                                  <td>{{ $item->name }}</td>
                                  <td>{{ $item->email }}</td>
                                  <td>{{ $item->created_at }}</td>
                  </tr>
                  @endforeach
                </tbody>
             
            </table>

        </div>

    </div>
</div>
@endsection
