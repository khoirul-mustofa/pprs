@extends('dashboard.layouts.main')
@section('container')
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    {{-- <link href="/public/pendaftaran/css/main.css" rel="stylesheet" media="all"> --}}

    <div class="row justify-content-center font">
        <h1 class="h2 pt-3 pb-2 text-md-start text-center">Ubah Data Santri</h1>
        <hr class="w-100 clearfix my-3" />
        <div class="col-md-8">
            <main class="form-register w-100 m-auto container p-3 bg-light rounded">

                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="/dashboard/pendaftaran-santri/{{ $pendaftar->id }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-2 rounded bg-white p-3 border">

                        {{-- <label for="status" class="mt-2 px-2">Status Pendaftaran</label>
                <div class="form-floating mb-2 mt-1">
                    <select class="form-select" aria-label="Default select example" name="status">
                        @foreach ($status as $s)
                            @if (old('status', $pendaftar->status_id) == $s->id)
                                    <option value="{{ $s->id }}"selected>{{ $s->name }}</option>
                            @else
                                    <option value="{{ $s->id }}">{{ $s->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div> --}}
                        <div class="mb-3">
                            <label for="status" class="form-label">Status Pendaftaran</label>
                            <select class="form-select" name="status">
                                @foreach ($status as $s)
                                    @if (old('status', $pendaftar->status_id) == $s->id)
                                        <option value="{{ $s->id }}"selected>{{ $s->name }}</option>
                                    @else
                                        <option value="{{ $s->id }}">{{ $s->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control rounded-top" name="nama" id="nama"
                                placeholder="Nama" required value="{{ old('nama', $pendaftar->nama) }}">
                            <label for="nama">Nama Lengkap Sesuai Ijazah</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-top" name="tempatLahir" id="tempatLahir"
                                placeholder="Tempat Lahir" required
                                value="{{ old('tempatLahir', $pendaftar->templahir) }}">
                            <label for="tempatLahir">Tempat Lahir</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control rounded-top " name="tglLahir" id="tglLahir"
                                placeholder="Tanggal Lahir" required value="{{ old('tglLahir', $pendaftar->tgllahir) }}">
                            <label for="tglLahir">Tanggal Lahir</label>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" name="jenisKelamin">
                                @foreach ($jenisKelamin as $jkl)
                                    @if (old('jenisKelamin', $pendaftar->jkl) == $jkl)
                                        <option value="{{ $jkl }}" selected>{{ $jkl }}</option>
                                    @else
                                        <option value="{{ $jkl }}">{{ $jkl }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="statusa" class="form-label">Status Anak</label>
                            <select class="form-select" name="statusa">
                                @foreach ($statusAnak as $s)
                                    @if (old('statusa', $pendaftar->statusa) == $s)
                                        <option value="{{ $s }}" selected>{{ $s }}</option>
                                    @else
                                        <option value="{{ $s }}">{{ $s }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <label class="px-2 mt-2">Nomor Induk keluarga</label>
                        <div class="form-floating mb-3 mt-1">
                            <input type="number" class="form-control rounded-top @error('nik') is-invalid @enderror"
                                name="nik" id="nik" placeholder="NIK" required
                                value="{{ old('nik', $pendaftar->nik) }}">
                            <label for="NIK">NIK</label>
                            @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <h4 class="text-center mt-3">ALAMAT</h4>
                        <hr class="w-100 clearfix my-3" />
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control rounded-top" name="desa" id="desa"
                                placeholder="Desa" required value="{{ old('desa', $pendaftar->desa) }}">
                            <label for="desa">Desa</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control rounded-top" name="kecamatan" id="kecamatan"
                                placeholder="kecamatan" required value="{{ old('kecamatan', $pendaftar->kecamatan) }}">
                            <label for="kecamatan">Kecamatan</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control rounded-top" name="kabupaten" id="kabupaten"
                                placeholder="Kabupaten" required value="{{ old('kabupaten', $pendaftar->kabupaten) }}">
                            <label for="kabupaten">Kabupaten</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control rounded-top" name="provinsi" id="provinsi"
                                placeholder="Provinsi" required value="{{ old('provinsi', $pendaftar->provinsi) }}">
                            <label for="provinsi">Provinsi</label>
                        </div>
                        <label class="px-2 mt-2">Email guna mengirimkan file</label>
                        <div class="form-floating mb-3 mt-1">
                            <input type="email" class="form-control rounded-top" name="email" id="email"
                                placeholder="Email" required value="{{ old('email', $pendaftar->email) }}">
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control rounded-top" name="riwayatMedis" id="riwayatMedis"
                                placeholder="Riwaya Medis" value="{{ old('riwayatMedis', $pendaftar->riwayat) }}">
                            <label for="riwayatMedis">Riwayat Medis</label>
                        </div>
                        <h4 class="text-center mt-3">ORANG TUA</h4>
                        <hr class="w-100 clearfix my-3" />
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control rounded-top" name="nmaAyah" id="nmaAyah"
                                placeholder="Nama Ayah" required value="{{ old('nmaAyah', $pendaftar->ayah) }}">
                            <label for="nmaAyah">Nama Ayah</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control rounded-top" name="krjAyah" id="krjAyah"
                                placeholder="Pekerjaan Ayah" required
                                value="{{ old('krjAyah', $pendaftar->pekerjaanA) }}">
                            <label for="krjAyah">Pekerjaan Ayah</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control rounded-top" name="nmaIbu" id="nmaIbu"
                                placeholder="Nama Ibu" required value="{{ old('nmaIbu', $pendaftar->ibu) }}">
                            <label for="nmaIbu">Nama Ibu</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control rounded-top" name="krjIbu" id="krjIbu"
                                placeholder="Pekerjaan Ibu" required
                                value="{{ old('krjIbu', $pendaftar->pekerjaanI) }}">
                            <label for="krjIbu">Pekerjaan Ibu</label>
                        </div>
                        <label class="px-2 mt-2">No WhatsApp akan dimasukan kedalam grup informasi wali santri</label>
                        <div class="form-floating mb-3 mt-1">
                            <input type="number" class="form-control rounded-top" name="noHp" id="noHp"
                                placeholder="Nomor Hp" required value="{{ old('noHp', $pendaftar->hp) }}">
                            <label for="noHp">Nomor HP/Whatsapp</label>
                        </div>
                        <h4 class="text-center my-3">ASAL SEKOLSMPAH</h4>
                        <label class="mt-2 px-2">Sesuai Ijazah Terakhir</label>
                        <hr class="w-100 clearfix my-3" />
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control rounded-top" name="nmSekolah" id="nmSekolah"
                                placeholder="Nama Sekolah" required value="{{ old('nmSekolah', $pendaftar->sekolah) }}">
                            <label for="nmSekolah">Nama Sekolah</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control rounded-top" name="almtSekolah" id="almtSekolah"
                                placeholder="Alamat Sekolah" required
                                value="{{ old('almtSekolah', $pendaftar->alamat) }}">
                            <label for="almtSekolah">Alamat Sekolah</label>
                        </div>

                        <div class="mb-3">
                            <label for="ijsTerakhir" class="form-label">Ijazah Terakhir</label>
                            <select class="form-select" name="ijazahTerakhir">
                                @foreach ($ijazah as $ij)
                                    @if (old('ijazahTerakhir', $pendaftar->ijazah) == $ij)
                                        <option value="{{ $ij }}" selected>{{ $ij }}</option>
                                    @else
                                        <option value="{{ $ij }}">{{ $ij }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-floating mb-3 mt-2 p-md-4">
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
                                <input class="form-check-input" type="radio" name="pernyataan" id="pernyataan"
                                    required value="Iya">
                                <label class="form-check-label" for="pernyataan">
                                    Iya, Menyetujui
                                </label>
                            </div>
                        </div>

                        <button class=" btn btn-lg my-3 text-light" style="background-color: #0c9488;"
                            type="submit">Update</button>

                </form>

            </main>
        </div>

    </div>
@endsection
