@extends('layouts.main')
@section('konten')
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
.row.justify-content-center.font
<div class="col-12 col-sm-4 col-lg-6">
    <div class="card">
        <table class="table table-light table-striped" >
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td>{{ $detailPendaftar[0]->nama }}</td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>{{ $detailPendaftar[0]->templahir }}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>{{ $detailPendaftar[0]->tgllahir }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>{{ $detailPendaftar[0]->jkl }}</td>
                </tr>
                <tr>
                    <td>Setatus Anak</td>
                    <td>{{ $detailPendaftar[0]->statusa }}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>{{ $detailPendaftar[0]->nik }}</td>
                </tr>
                <tr>
                    <td>Desa</td>
                    <td>{{ $detailPendaftar[0]->desa }}</td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td>{{ $detailPendaftar[0]->kecamatan }}</td>
                </tr>
                <tr>
                    <td>Kabupaten</td>
                    <td>{{ $detailPendaftar[0]->kabupaten }}</td>
                </tr>
                <tr>
                    <td>Provinsi</td>
                    <td>{{ $detailPendaftar[0]->provinsi }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $detailPendaftar[0]->email }}</td>
                </tr>
                <tr>
                    <td>Riwayat</td>
                    <td>{{ $detailPendaftar[0]->riwayat }}</td>
                </tr>
                <tr>
                    <td>Nama Ayah</td>
                    <td>{{ $detailPendaftar[0]->ayah }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan Ayah</td>
                    <td>{{ $detailPendaftar[0]->pekerjaanA }}</td>
                </tr>
                <tr>
                    <td>Nama Ibu</td>
                    <td>{{ $detailPendaftar[0]->ibu }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan Ibu</td>
                    <td>{{ $detailPendaftar[0]->pekerjaanI }}</td>
                </tr>
                <tr>
                    <td>Nomor Hp</td>
                    <td>{{ $detailPendaftar[0]->hp }}</td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td>{{ $detailPendaftar[0]->sekolah }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>{{ $detailPendaftar[0]->alamat }}</td>
                </tr>
                <tr>
                    <td>Ijazah Terakhir</td>
                    <td>{{ $detailPendaftar[0]->ijazah }}</td>
                </tr>
                <tr>
                    <td>Setuju Aturan</td>
                    <td>{{ $detailPendaftar[0]->menyetujui }}</td>
                </tr>
                <tr>
                    <td>Waktu Mendaftar</td>
                    <td>{{ $detailPendaftar[0]->created_at }}</td>
                </tr>

            </tbody>
        </table>
    </div>

</div>



@endsection
