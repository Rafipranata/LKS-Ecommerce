@extends('./vendor.template')

@include('admin.category.customize.style')

@section('title')
    Kategori Produk
@endsection

@section('content')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @include('./vendor.navbar')

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h2>@yield('title')</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <a href="#" onclick="tambah()" class="btn btn-primary btn-md">+ Buat Data</a>
                                    <div class="table-responsive">
                                        {!! $dataTable->table([
                                            'id' => 'kategoriproduk-table',
                                            'class' => 'table table-striped table-bordered',
                                        ]) !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @include('admin.category.modals.form')
            @endsection

            @include('admin.category.customize.scripts')
