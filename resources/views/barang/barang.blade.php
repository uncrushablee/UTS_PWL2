@extends('template.main')
@section('title', 'Barang')
@section('content')

<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">@yield('title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Filter Search -->
                    <div class="card mb-2">
                        <div class="card-body">
                            <form action="{{ url('/barang') }}" method="GET" class="form-inline">
                                <input type="text" name="search" class="form-control mr-2" placeholder="Cari barang..." value="{{ request('search') }}">
                                <button type="submit" class="btn btn-secondary">Filter</button>
                            </form>
                        </div>
                    </div>

                    <!-- Data Table -->
                    <div class="card">
                        <div class="card-header">
                            <div class="text-right">
                                <a href="/barang/create" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add Barang</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-striped table-bordered table-hover text-center" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Category</th>
                                        <th>Supplier</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Note</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($barang as $data)
                                        <tr>
                                            <td>{{ $loop->iteration + ($barang->currentPage() - 1) * $barang->perPage() }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->category }}</td>
                                            <td>{{ $data->supplier }}</td>
                                            <td>{{ $data->stock }}</td>
                                            <td>Rp. {{ number_format($data->price, 0) }}</td>
                                            <td>{{ $data->note }}</td>
                                            <td>
                                                <form class="d-inline" action="/barang/{{ $data->id_barang }}/edit" method="GET">
                                                    <button type="submit" class="btn btn-success btn-sm mr-1">
                                                        <i class="fa-solid fa-pen"></i> Edit
                                                    </button>
                                                </form>
                                                <form class="d-inline" action="/barang/{{ $data->id_barang }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm" id="btn-delete">
                                                        <i class="fa-solid fa-trash-can"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8">Data tidak ditemukan.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            <!-- Pagination -->
                            <div class="mt-3">
                                {{ $barang->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
