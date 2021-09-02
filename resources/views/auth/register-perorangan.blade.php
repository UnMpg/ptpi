@extends('layouts.auth.app')
@section('title', 'Perorangan')
@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="#"><b>Pendaftaran</b> Perorangan</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Pendaftaran Calon Anggota</p>
            <div class="alert alert-warning" role="alert">
                <small> <i class="fas fa-exclamation-triangle"></i> Perhatian! Isi terlebih dahulu Formulir
                    <strong>Curriculum Vitae</strong> bisa diunduh (<a
                        href="{{ action('HomeController@downloadCvAnggota') }}">disini</a>), kemudian submit
                    kedalam form pendaftaran dibawah.</small>
            </div>
            <div class="mb-3">
                @include('layouts.shared.status')
            </div>
            <form action="{{ action('AuthController@registerPersonal') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-0">
                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required />
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>

                <div class="input-group mb-0 mt-3">
                    <input type="text" class="form-control" placeholder="Email" name="email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>

                    <div class="input-group mb-0 mt-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-0 mt-3">
                        <input type="password" name="password_confirmation" class="form-control"
                            placeholder="Ulangi password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-0 mt-3">
                        <input type="text" class="form-control" placeholder="Nomor Telepon / HP" name="kontak"
                            maxlength="13" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-0 mt-3">
                        <textarea name="alamat" class="form-control" id="" rows="4"
                            placeholder="Tempat tinggal / Domisili" required></textarea>
                        <div class="input-group-append">
                            <div class="input-group-text"></div>
                        </div>
                    </div>


                    <div class="input-group mb-0 mt-3">
                        <input type="text" class="form-control" placeholder="Nama Instansi" name="instansi"
                            class="form-group" required>
                        <div class="input-group-append">
                            <div class="input-group-text"></div>
                        </div>
                    </div>

                    <div class="input-group mb-0 mt-3">
                        <input type="text" class="form-control" placeholder="Nama Jabatan" name="jabatan"
                            class="form-group mt-3" required>
                        <div class="input-group-append">
                            <div class="input-group-text"></div>
                        </div>
                    </div>

                    <div class="input-group mb-0 mt-3">
                        <input type="text" class="form-control" placeholder="Bidang Ilmu" name="bidang_ilmu"
                            class="form-group" required>
                        <div class="input-group-append">
                            <div class="input-group-text"></div>
                        </div>
                    </div>

                    <small class="font-italic text-muted">*Contoh : Biomedical Engineering</small>
                    <br>

                    <div class="form-group">
                        <label for="image">Foto 4x6</label>
                        <input type="file" class="form-control-file" id="" name="image" required>
                        <small class="font-italic text-muted mb-0">*File harus berekstensi
                            <strong>.jpg/.jpeg/.png</strong>
                            Maks
                            2MB</small><br>
                    </div>

                    <div class="form-group">
                        <label for="cv">Curriculum Vitae</label>
                        <input type="file" class="form-control-file" id="" name="member_cv" required>
                        <small class="font-italic text-muted">*File harus berekstensi <strong>.pdf</strong> Maks
                            2MB</small><br>
                    </div>

                    <div class="row mt-3">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                                <label for="agreeTerms">
                                    Saya setuju dengan <a href="#">ketentuan</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" id="btnRegister" class="btn btn-primary btn-block"
                                disabled="disabled">Daftar</button>
                        </div>
            </form>
        </div>
        <br>
        <a href="{{ action('AuthController@login') }}" class="text-center">Saya sudah terdaftar sebagai anggota</a>
        <br>
        <a href="{{ action('AuthController@login') }}" class="text-center">Pilih jenis pendaftaran</a>
    </div>
    <!-- /.form-box -->
</div><!-- /.card -->
<p style="text-align:center; font-size:12px;">Copyright &copy; 2019 Persatuan Teknik Perumahsakitan Indonesia</p>
</div>
<!-- /.register-box -->

<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    $("#agreeTerms").click(function() {
        $("#btnRegister").attr("disabled", !this.checked);
    });
</script>
@endsection
