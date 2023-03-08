<!-- Extra large modal -->
@foreach( $dus as $du )
<div class="modal fade bd-example-modal-md" id="form-edit{{ $du->id }}" tabindex="-1" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="judul">Edit {{ $title }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/du/{{ $du->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kode Transaksi</label>
                        <input type="text" class="form-control" name="kdtrx_du" id="exampleFormControlInput1"
                            placeholder="Input..." value="{{ old('kdtrx_du', $du->kdtrx_du) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="siswa_id" id="exampleFormControlInput1"
                            placeholder="Input..." value="{{ old('siswa_id', $du->siswa_id) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Bayar</label>
                        <input type="date" class="form-control" name="tgl_bayar" id="exampleFormControlInput1"
                            placeholder="Input..." value="{{ old('tgl_bayar', $du->tgl_bayar) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" id="exampleFormControlInput1"
                            placeholder="Input..." value="{{ old('jumlah', $du->jumlah) }}" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a class="btn btn-danger" class="close" data-dismiss="modal" aria-label="Close">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach