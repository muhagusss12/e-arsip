@extends('layouts.app')

@section('layouts.contents')

<!-- Page Heading -->

<div class="container-fluid mt-5">
    <div class="card">
        <div class="card-header bg-primary">
            <h2 class="text-center text-white">DAFTAR INVENTARISASI</h2>
        </div>
        <div class="card-body">
            <div class="row ">
                <div class="col d-flex justify-content-end">
                    <div class="create p-3 ">
                        <div class="btn btn-primary" data-toggle="modal" data-target="#modalInventaris">Tambah Data</div>
                        {{-- <div class="btn btn-success">Tambah Data</div> --}}
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-hover">
                    <thead class="bg-primary text-white text-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Inventaris</th>
                            <th scope="col">Kode Inventaris</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Ruangan</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($data as $p)
                            
                        

                        <tr>
                            <td>{{ $p->id}}</td>
                            <td>{{ $p->nama_inventaris }}</td>
                            <td>{{ $p->kode_inventaris }}</td>
                            <td>{{ $p->harga }}</td>
                            <td>{{ $p->tanggal }}</td>
                            <td>{{ $p->ruangan }}</td>
                            <td>
                                @if ($p->keterangan == 'baik')
                                    <span class="badge badge-primary">BAIK</span>
                                @elseif ($p->keterangan == 'kurang_baik')
                                    <span class="badge badge-warning">KURANG BAIK</span>
                                @else
                                    <span class="badge badge-danger">RUSAK</span>
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-danger rounded"  data-toggle="modal"
                                    data-target="#hapus{{ $p->id }}"><i class="fas fa-fw fa-trash"></i>
                                </button>
                                <button class="btn btn-warning mt-2 rounded" data-toggle="modal"
                                    data-target="#edit{{ $p->id }}"><i class="fas fa-fw fa-pencil-alt"></i>
                                </button>
                            </td>
                            
                        </tr>
                        @endforeach
                        
                    </tbody>
            </table>

            
        </div>
    </div>

</div>


{{-- modal tambah data  --}}
<div class="modal fade" id="modalInventaris" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg mt-3" role="document">
        <form action="{{ route('store.inventaris')}}" method="POST">
            @csrf
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Inventaris</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Inventaris</label>
                                <input type="text" name="nama_inventaris" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kode Inventaris</label>
                                <input type="text" name="kode_inventaris" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" name="harga" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ruangan</label>
                                <input type="text" name="ruangan" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Keterangan</label>
                                <select name="keterangan" class="form-control" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="baik">Baik</option>
                                    <option value="kurang_baik">Kurang Baik</option>
                                    <option value="rusak">Rusak</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>

            </div>
        </form>
    </div>
</div>
 {{-- end modal --}}


 {{-- edit modal --}}
    @foreach ($data as $p)

    <div class="modal fade" id="edit{{ $p->id }}" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <form action="{{ route('update.inventaris', $p->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Inventaris</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-6 form-group">
                                <label>Nama Inventaris</label>
                                <input type="text" name="nama_inventaris" class="form-control"
                                    value="{{ $p->nama_inventaris }}" required>
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Kode Inventaris</label>
                                <input type="text" name="kode_inventaris" class="form-control"
                                    value="{{ $p->kode_inventaris }}" required>
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Harga</label>
                                <input type="number" name="harga" class="form-control"
                                    value="{{ $p->harga }}" required>
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Tanggal</label>
                                <input type="date" name="tanggal" class="form-control"
                                    value="{{ $p->tanggal }}" required>
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Ruangan</label>
                                <input type="text" name="ruangan" class="form-control"
                                    value="{{ $p->ruangan }}" required>
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Keterangan</label>
                                <select name="keterangan" class="form-control" required>
                                    <option value="baik" {{ $p->keterangan == 'baik' ? 'selected' : '' }}>Baik</option>
                                    <option value="kurang_baik" {{ $p->keterangan == 'kurang_baik' ? 'selected' : '' }}>Kurang Baik</option>
                                    <option value="rusak" {{ $p->keterangan == 'rusak' ? 'selected' : '' }}>Rusak</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button class="btn btn-warning">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

        
    @endforeach
 
 {{-- end edit modal --}}

 {{-- hapus modal --}}

 <div class="modal fade" id="hapus{{ $p->id }}" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('destroy.inventaris', $p->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body text-center">
                    <p>Yakin ingin menghapus inventaris:</p>
                    <strong>{{ $p->nama_inventaris }}</strong> ?
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </form>
    </div>
</div>

 {{-- hapus modal --}}

@endsection