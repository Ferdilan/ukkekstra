<!-- Extra large modal -->
<div class="modal fade bd-example-modal-md" id="form-create" tabindex="-1" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="judul">Tambah {{ $title }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-valide" action="/du" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kode Transaksi</label>
                        <input type="text" class="form-control" name="kdtrx_du" id="exampleFormControlInput1"
                            placeholder="Input..." required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Siswa</label>
                        <select class="form-control " id="exampleFormControlInput1" name="siswa_id" required>
                            <option value="">Pilih Siswa</option>
                            @foreach( $users as $user)
                            <option value="{{ $user->id }}">{{ $user->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Bayar</label>
                        <input type="date" name="tgl_bayar" class="form-control" id="exampleFormControlInput1" cols="20"
                            rows="5" placeholder="Input..." required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" id="exampleFormControlInput1"
                            placeholder="Input..." required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a class="btn btn-danger" class="close" data-dismiss="modal" aria-label="Close">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>