@extends('dashboard.layouts.main')
@section('container')
    <div class="container col-lg-9">
        <h3 class="border-bottom mb-5 py-3">Detail data {{ $detailPendaftar->nama }}</h3>
        <table class="table table-light table-striped">
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td>{{ $detailPendaftar->nama }}</td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>{{ $detailPendaftar->templahir }}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>{{ $detailPendaftar->tgllahir }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>{{ $detailPendaftar->jkl }}</td>
                </tr>
                <tr>
                    <td>Setatus Anak</td>
                    <td>{{ $detailPendaftar->statusa }}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>{{ $detailPendaftar->nik }}</td>
                </tr>
                <tr>
                    <td>Desa</td>
                    <td>{{ $detailPendaftar->desa }}</td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td>{{ $detailPendaftar->kecamatan }}</td>
                </tr>
                <tr>
                    <td>Kabupaten</td>
                    <td>{{ $detailPendaftar->kabupaten }}</td>
                </tr>
                <tr>
                    <td>Provinsi</td>
                    <td>{{ $detailPendaftar->provinsi }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $detailPendaftar->email }}</td>
                </tr>
                <tr>
                    <td>Riwayat</td>
                    <td>{{ $detailPendaftar->riwayat }}</td>
                </tr>
                <tr>
                    <td>Nama Ayah</td>
                    <td>{{ $detailPendaftar->ayah }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan Ayah</td>
                    <td>{{ $detailPendaftar->pekerjaanA }}</td>
                </tr>
                <tr>
                    <td>Nama Ibu</td>
                    <td>{{ $detailPendaftar->ibu }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan Ibu</td>
                    <td>{{ $detailPendaftar->pekerjaanI }}</td>
                </tr>
                <tr>
                    <td>Nomor Hp</td>
                    <td>{{ $detailPendaftar->hp }}</td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td>{{ $detailPendaftar->sekolah }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>{{ $detailPendaftar->alamat }}</td>
                </tr>
                <tr>
                    <td>Ijazah Terakhir</td>
                    <td>{{ $detailPendaftar->ijazah }}</td>
                </tr>
                <tr>
                    <td>Setuju Aturan</td>
                    <td>{{ $detailPendaftar->menyetujui }}</td>
                </tr>
                <tr>
                    <td>Waktu Mendaftar</td>
                    <td>{{ $detailPendaftar->created_at }}</td>
                </tr>

            </tbody>
        </table>
    </div>
@endsection
