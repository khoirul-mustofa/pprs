@extends('layouts.main')
@section('konten')
<link href="pendaftaran/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="pendaftaran/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<link href="pendaftaran/vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="pendaftaran/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

<link href="pendaftaran/css/main.css" rel="stylesheet" media="all">

<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Formulir Pendaftaran Santri 2022/2023</h2>
                <form action="/pendaftaran-santri" method="POST">
                    @csrf
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Nama Ijazah</label>
                                <input class="input--style-4" type="text" name="first_name" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Tempat Lahir</label>
                                <input class="input--style-4" type="text" name="last_name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Tanggal Lahir</label>
                                <div class="input-group-icon">
                                    <input class="input--style-4 js-datepicker" type="text" name="birthday" required>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Jenis Kelamin</label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45">Laki-Laki
                                        <input type="radio" checked="checked" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Perempuan
                                        <input type="radio" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <select class="form-select mb-4 border-none mt-2" style="color: #666" aria-label="Default select example" required>
                        <option  disabled selected>Status Anak</option>
                        <option value="kandung">Kandung</option>
                        <option value="Tiri">Tiri</option>
                        <option value="Asuh">Asuh</option>
                    </select>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">NIK</label>
                                <input class="input--style-4" type="text" name="text" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Desa</label>
                                <input class="input--style-4" type="text" name="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Kecamatan</label>
                                <input class="input--style-4" type="text" name="text" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Kabupaten</label>
                                <input class="input--style-4" type="text" name="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Profinsi</label>
                                <input class="input--style-4" type="text" name="text" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Kabupaten</label>
                                <input class="input--style-4" type="text" name="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Email</label>
                                <input class="input--style-4" type="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Riwayat Medis</label>
                                <input class="input--style-4" type="text" name="phone" required>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-center">ORANG TUA</h4>
                    <hr class="w-100 clearfix my-3" />
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Nama Ayah</label>
                                <input class="input--style-4" type="text" name="text" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Pekerjaan Ayah</label>
                                <input class="input--style-4" type="text" name="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Nama Ibu</label>
                                <input class="input--style-4" type="text" name="text" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Pekerjaan Ibu</label>
                                <input class="input--style-4" type="text" name="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Alamat Orang Tua</label>
                                <input class="input--style-4" type="text" name="text" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Nomo HP/Whatsapp</label>
                                <input class="input--style-4" type="text" name="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Alamat Orang Tua</label>
                                <input class="input--style-4" type="text" name="text" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Nomo HP/Whatsapp</label>
                                <input class="input--style-4" type="text" name="phone" required>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-center">ASAL SEKOLAH</h4>
                    <label class="label text-center">Sesuai Ijasah Terakhir</label>
                    <hr class="w-100 clearfix my-3" />

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Nama Sekolah</label>
                                <input class="input--style-4" type="text" name="text" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Alamat Sekolah</label >
                                <input class="input--style-4" type="text" name="phone" required>
                            </div>
                        </div>
                    </div>
                    <select class="form-select mb-4 border-none mt-2" style="color: #666" aria-label="Default select example" required>
                        <option  disabled selected>Ijazah Terakhir</option>
                        <option value="RA/TK">RA/TK</option>
                        <option value="MI/SD">MI/SD</option>
                        <option value="MTS/SMP">MTS/SMP</option>
                        <option value="MA/SMK/SMA">MA/SMK/SMA</option>
                    </select>
                    <hr class="w-100 clearfix my-5" />
                    <div class="" style="color: #666">
                        <h3 class="fw-bolder text-center my-3">PERSYARATAN PENDAFTARAN</h3>
                        <ul>
                            <li>Membawa Fotocopy KK (Kartu Keluarga) x2</li>
                            <li>Membawa Fotocopy Akte Kelahiran x2</li>
                            <li>Membawa Fotocopy Ijazah Terakhir x2</li>
                            <li>Membawa Fotocopy SKHU (Surat Keterangan hasil Ujian) x2</li>
                        </ul>
                        <h4 class="fw-bolder my-3">Persyaratan Wajib Dibawa ke Pesantren</h4>
                    </div>
                    <hr class="w-100 clearfix my-5" />
                    <div class="" style="color: #666">
                        <h3 class="fw-bolder text-center my-3">PERNYATAAN</h3>
                        <div class="input-group">
                            <p>Apabila Calon Santri Telah Mendaftar Di Pondok Pesantren Roudlotussholihin Berarti Telah Menyetujui Peraturan Dan Kebijakan Pesantren Baik Tertulis Maupun Tidak Tertulis.</p>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Iya, menyetujui
                                    <input type="radio" name="gender" required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="p-t-15">
                        <button type="button" class="btn btn-primary" type="submit">kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="pendaftaran/vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="pendaftaran/vendor/select2/select2.min.js"></script>
<script src="pendaftaran/vendor/datepicker/moment.min.js"></script>
<script src="pendaftaran/vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="pendaftaran/js/global.js"></script>
@endsection

