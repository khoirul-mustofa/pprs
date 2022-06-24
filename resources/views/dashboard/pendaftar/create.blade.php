@extends('dashboard.layouts.main')
@section('container')
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

{{-- <link href="/public/pendaftaran/css/main.css" rel="stylesheet" media="all"> --}}

<div class="row justify-content-center font">
    <h1 class="h2 pt-3 pb-2 text-md-start text-center">Tambah Data Pendaftar</h1>
    <hr class="w-100 clearfix my-3" />
    <div class="col-md-6">
        <main class="form-register w-100 m-auto container bg-light rounded">

            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form action="/pendaftaran-santri/daftar" method="POST">
                @csrf
                <div class="form-floating mb-2 mt-3">
                    <input type="text" class="form-control rounded-top" name="nama" id="nama" placeholder="Nama" required value="{{ old('nama') }}">
                    <label for="nama">Nama Lengkap Sesuai Ijazah</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control rounded-top" name="tempatLahir" id="tempatLahir" placeholder="Tempat Lahir" required value="{{ old('tempatLahir') }}">
                    <label for="tempatLahir">Tempat Lahir</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="date" class="form-control rounded-top " name="tglLahir" id="tglLahir" placeholder="Tanggal Lahir" required value="{{ old('tglLahir') }}">
                    <label for="tglLahir">Tanggal Lahir</label>
                </div>
                <div class="mb-2 rounded bg-white p-3 border">
                    <label for="jnk" class="mb-2">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenisKelamin" id="jkel1" value="laki-laki">
                        <label class="form-check-label" for="laki">
                          laki-Laki
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenisKelamin" value="perempuan" id="jkel2" checked>
                        <label class="form-check-label" for="perempuan">
                          Perempuan
                        </label>
                      </div>
                </div>
                <div class="mb-2 rounded bg-white p-3 border">
                    <label class="mb-2">Status Anak</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusAnak" id="kandung" value="kandung">
                        <label class="form-check-label" for="kandung">
                          Kandung
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusAnak" id="tiri" value="tiri">
                        <label class="form-check-label" for="tiri">
                          Tiri
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusAnak" id="asuh" checked value="asuh">
                        <label class="form-check-label" for="asuh">
                          Asuh
                        </label>
                      </div>
                </div>
                <label class="px-2 mt-2">Nomor Induk keluarga</label>
                <div class="form-floating mb-2 mt-1">
                    <input type="number" class="form-control rounded-top @error('nik') is-invalid @enderror" name="nik" id="nik" placeholder="NIK" required value="{{ old('nik') }}">
                    <label for="NIK">NIK</label>
                    @error('nik')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <h4 class="text-center mt-3">ALAMAT</h4>
                <hr class="w-100 clearfix my-3" />
                <div class="form-floating mb-2 mt-3">
                    <input type="text" class="form-control rounded-top" name="desa" id="desa" placeholder="Desa" required value="{{ old('desa') }}">
                    <label for="desa">Desa</label>
                </div>
                <div class="form-floating mb-2 mt-3">
                    <input type="text" class="form-control rounded-top" name="kecamatan" id="kecamatan" placeholder="kecamatan" required value="{{ old('kecamatan') }}">
                    <label for="kecamatan">Kecamatan</label>
                </div>
                <div class="form-floating mb-2 mt-3">
                    <input type="text" class="form-control rounded-top" name="kabupaten" id="kabupaten" placeholder="Kabupaten" required value="{{ old('kabupaten') }}">
                    <label for="kabupaten">Kabupaten</label>
                </div>
                <div class="form-floating mb-2 mt-3">
                    <input type="text" class="form-control rounded-top" name="provinsi" id="provinsi" placeholder="Provinsi" required value="{{ old('provinsi') }}">
                    <label for="provinsi">Provinsi</label>
                </div>
                <label class="px-2 mt-2">Email guna mengirimkan file</label>
                <div class="form-floating mb-2 mt-1">
                    <input type="email" class="form-control rounded-top" name="email" id="email" placeholder="Email" required value="{{ old('email') }}">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-2 mt-3">
                    <input type="text" class="form-control rounded-top" name="riwayatMedis" id="riwayatMedis" placeholder="Riwaya Medis"  value="{{ old('riwayatMedis') }}">
                    <label for="riwayatMedis">Riwayat Medis</label>
                </div>
                <h4 class="text-center mt-3">ORANG TUA</h4>
                <hr class="w-100 clearfix my-3" />
                <div class="form-floating mb-2 mt-3">
                    <input type="text" class="form-control rounded-top" name="nmaAyah" id="nmaAyah" placeholder="Nama Ayah" required value="{{ old('nmaAyah') }}">
                    <label for="nmaAyah">Nama Ayah</label>
                </div>
                <div class="form-floating mb-2 mt-3">
                    <input type="text" class="form-control rounded-top" name="krjAyah" id="krjAyah" placeholder="Pekerjaan Ayah" required value="{{ old('krjAyah') }}">
                    <label for="krjAyah">Pekerjaan Ayah</label>
                </div>
                <div class="form-floating mb-2 mt-3">
                    <input type="text" class="form-control rounded-top" name="nmaIbu" id="nmaIbu" placeholder="Nama Ibu" required value="{{ old('nmaIbu') }}">
                    <label for="nmaIbu">Nama Ibu</label>
                </div>
                <div class="form-floating mb-2 mt-3">
                    <input type="text" class="form-control rounded-top" name="krjIbu" id="krjIbu" placeholder="Pekerjaan Ibu" required value="{{ old('krjIbu') }}">
                    <label for="krjIbu">Pekerjaan Ibu</label>
                </div>
                <label class="px-2 mt-2">No WhatsApp akan dimasukan kedalam grup informasi wali santri</label>
                <div class="form-floating mb-2 mt-1">
                    <input type="number" class="form-control rounded-top" name="noHp" id="noHp" placeholder="Nomor Hp" required value="{{ old('noHp') }}">
                    <label for="noHp">Nomor HP/Whatsapp</label>
                </div>
                <h4 class="text-center my-3">ASAL SEKOLAH</h4>
                <label class="mt-2 px-2">Sesuai Ijazah Terakhir</label>
                <hr class="w-100 clearfix my-3" />
                <div class="form-floating mb-2 mt-3">
                    <input type="text" class="form-control rounded-top" name="nmSekolah" id="nmSekolah" placeholder="Nama Sekolah" required value="{{ old('nmSekolah') }}">
                    <label for="nmSekolah">Nama Sekolah</label>
                </div>
                <div class="form-floating mb-2 mt-3">
                    <input type="text" class="form-control rounded-top" name="almtSekolah" id="almtSekolah" placeholder="Alamat Sekolah" required value="{{ old('almtSekolah') }}">
                    <label for="almtSekolah">Alamat Sekolah</label>
                </div>
                <label for="ijsTerakhir" class="mt-2 px-2">Ijazah Terakhir</label>
                <div class="form-floating mb-2 mt-1">
                    <select class="form-select" aria-label="Default select example" name="ijazahTerakhir">
                        <option selected value="RA/TK">RA/TK</option>
                        <option value="MI/SD">MI/SD</option>
                        <option value="MTs/SMP">MTs/SMP</option>
                        <option value="MA/SMK/SMA">MA/SMK/SMA</option>
                      </select>
                </div>

                <div class="form-floating mb-2 mt-2 p-md-4">
                   <h4 class="mb-2 fw-bold">PERSYARATAN PENDAFTARAN</h4>
                   <ol>
                       <li>Membawa Fotocopy Kartu Keluarga x 2</li>
                       <li>Membawa Fotocopy Akte Kelahiran x 2</li>
                       <li>Membawa Fotocopy Ijazah Terakhir x 2</li>
                       <li>Membawa Fotocopy Surat Keterangan Hasil Ujian x 2</li>
                       <li>Persyaratan Wajib dibawa ke Pesantren</li>
                   </ol>
                </div>

                <div class="form-floating mb-2 px-md-4">
                    <h4 class="fw-bold mb-2">PERNYATAAN</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pernyataan" id="pernyataan" required value="Iya">
                        <label class="form-check-label" for="pernyataan">
                          Iya, Menyetujui
                        </label>
                      </div>
                 </div>

                <button class=" btn btn-lg my-3 text-light" style="background-color: #0c9488;" type="submit" onclick="return confirm('Pastikan Data anda benar!')">Kirim</button>

            </form>

          </main>
    </div>

</div>
@endsection
