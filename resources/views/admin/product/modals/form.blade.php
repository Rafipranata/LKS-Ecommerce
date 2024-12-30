<div class="col-lg-4 col-md-6">
    <div class="modal fade" id="ProdukModal" tabindex="-1" aria-hidden="true" data-bs-dismiss="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">{Modal Text}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="produkform">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Nama Produk</label>
                                <input type="text" id="nameWithTitle" class="form-control"
                                    placeholder="Masukan Nama Produk" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Category Produk</label>
                                <select class="form-select" id="exampleFormControlSelect1"
                                    aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label for="harga_produk" class="form-label">Harga Produk</label>
                                <input type="text" id="harga_produk" class="form-control"
                                    placeholder="Masukan Harga Produk" onkeyup="formatRupiah(this)" />
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
        function formatRupiah(input) {
            let value = input.value.replace(/\D/g, ''); 
            let formatted = new Intl.NumberFormat('id-ID').format(value); 
            input.value = formatted; 
        }

        function tambah() {
            $('#ProdukModal').modal('show');
            $('#btn-proses').text('Simpan');
            $('.modal-title').text('Tambah Produk')
        }

        function edit(id) {
            $('#ProdukModal').modal('show');
            $('#btn-proses').text('Ubah');
            $('.modal-title').text('Edit Produk')
        }

        function detail(id) {
            $('#ProdukModal').modal('show');
            $('#btn-proses').text('Detail');
            $('.modal-title').text('Detail Produk')
        }

        $.ajax({
            type: "method",
            url: "url",
            data: "data",
            dataType: "dataType",
            success: function(response) {}
        });
    </script>
@endpush
