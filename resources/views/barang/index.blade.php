@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Tabel Barang</h4>
        </div>
        <div class="card-body">
            <a type="button" class="btn btn-outline-primary" href="{{ url('barang/create') }}">
                <span class="tf-icons bx bx-pie-chart-alt"></span>&nbsp; Tambah Barang
              </a>   
      </div>
            <table class="table table-bordered table-hover" id="table_id">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Stok Barang</th>
                      <th>Harga Barang</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($data as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                                  <td>{{ $item->nama_barang }}</td>
                                  <td>{{ $item->stok }}</td>
                                  <td>{{ $item->harga_barang }}</td>
                                  <td><form action="{{ url("/barang/$item->id")  }}" method="POST">
                                    @csrf
                                   @method('delete')
                                 
                                    <button type="button" class="btn p-0" data-bs-toggle="dropdown">
                                      <i class="bx bx-dots-vertical-rounded"></i>
                                      <a class="btn btn-primary btn-sm" href="{{ url("/barang/$item->id/edit")  }}"
                                        ><i class="bx bx-edit-alt me-2"></i> Edit</a>                                    
                                      <input type="submit" class="btn btn-danger btn-sm" value="delete"></td>
                  </tr>
                  @endforeach
                </tbody>
             
            </table>

        </div>

    </div>
</div>
@endsection
