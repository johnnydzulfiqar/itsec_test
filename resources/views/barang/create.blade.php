@extends('layouts.app')

@section('content')
    <form action="{{ !empty($barang) ? route('barang.update', $barang): url('barang/create')}}" method="POST" enctype="multipart/form-data">
            @if(!empty($barang))
            @method('PATCH')
            @endif
            @csrf
            <form>
                <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Barang</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <i class="bx"></i></span>
                        <input
                          type="text"
                          name="nama_barang"
                          class="form-control"
                          id="nama_barang"
                          value="{{ old('nama_barang', @$barang->nama_barang) }}"
                          aria-describedby="basic-icon-default-fullname2"
                        />
                        @error('nama_barang')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Stok</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <input
                          type="text"
                          id="stok"
                          name="stok"
                          value="{{ old('stok', @$barang->stok) }}"
                          class="form-control"
                         
                          aria-describedby="basic-icon-default-email2"
                        />
                        @error('stok')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                      </div>
                      
                    </div>
                  </div>
                  
                  <div class="row mt-3">
                    <label class="col-sm-2 form-label" for="basic-icon-default-phone">Harga Barang</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                          <i class="bx "></i
                        ></span>
                        <input
                          type="text"
                          id="harga_barang"
                          name="harga_barang"
                          value="{{ old('harga_barang', @$barang->harga_barang) }}"
                          class="form-control fullname2-mask"
                         
                          aria-describedby="basic-icon-default-fullname2"
                        />
                        @error('harga_barang')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary mt-3 mb-3">Send</button>
                  </div>
            </form>   
    </form>
   
@endsection