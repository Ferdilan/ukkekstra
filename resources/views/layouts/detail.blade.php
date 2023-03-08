<!-- Extra large modal -->
@foreach( $dus as $du )
<div class="modal fade bd-example-modal-md" id="form-detail{{ $du->id }}" tabindex="-1" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="judul">Detail {{ $title }} <br> {{ $du->siswa->nis }} -
                    {{ $du->siswa->nama }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="table-responsive">
                <table class="table" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <th>Kode Transaksi</th>
                            <td>:</td>
                            <td>{{ $du->kdtrx_du }}</td>
                        </tr>
                        <tr>
                            <th>User Siswa</th>
                            <td>:</td>
                            <td>{{ $du->siswa->nis }} - {{ $du->siswa->nama }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Bayar</th>
                            <td>:</td>
                            <td>{{ $du->tgl_bayar }}</td>
                        </tr>
                        <tr>
                            <th>Nominal Jumlah</th>
                            <td>:</td>
                            <td>Rp. {{ $du->jumlah }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>:</td>
                            <td>
                                <h5><span class="badge badge-info text-white">DITERIMA OLEH BANK</span></h5>
                            </td>
                        </tr>
                        <tr>
                            <th>Di Input Pada</th>
                            <td>:</td>
                            <td>{{ $du->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Terakhir Update Pada</th>
                            <td>:</td>
                            <td>{{ $du->updated_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endforeach