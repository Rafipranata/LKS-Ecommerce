<div class="col-lg-4 col-md-6">
    <div class="modal fade" id="KategoriProdukModal" tabindex="-1" aria-hidden="true" data-bs-dismiss="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">{Modal Text}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="kategoriprodukform">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Nama Kategori</label>
                                <input type="text" id="nameWithTitle" class="form-control"
                                    placeholder="Masukan Nama Kategori" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Status</label>
                                <select class="form-select" id="exampleFormControlSelect1"
                                    aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Keluar
                    </button>
                    <button type="button" id="btn-proses" class="btn btn-primary">{Button Text}</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@push('scripts')
    <script>
        function tambah() {
            $('#KategoriProdukModal').modal('show');
            $('#btn-proses').text('Simpan');
            $('.modal-title').text('Tambah Kategori Produk')
        }

        function edit(id) {
            $('#KategoriProdukModal').modal('show');
            $('#btn-proses').text('Ubah');
            $('.modal-title').text('Edit Kategori Produk')
        }

        $.ajax({
            type: "method",
            url: "url",
            data: "data",
            dataType: "dataType",
            success: function(response) {
            }
        });
    </script>
@endpush
