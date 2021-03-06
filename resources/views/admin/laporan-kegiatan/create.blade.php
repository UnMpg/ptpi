@extends('layouts.dashboard.app')
@section('title-page', 'New Laporan Kegiatan')
@section('title-header', 'New Laporan Kegiatan')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4 card-outline card-info">
                <div class="card-body pad">
                    <form role="form" action="{{ action('LaporanKegiatanController@store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Tanggal Kegiatan</label>
                                <input type="date" class="form-control {{ $errors->first('tgl') ? 'is-invalid' : '' }}" placeholder="Tanggal Pengeluaran" name="tgl" required autocomplete="off">
                                @if ($errors->has('tgl'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('tgl') }}
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Nama Laporan</label>
                                <input type="text" class="form-control" placeholder="Nama Laporan" name="name" required autocomplete="off">
                                @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Details</label>
                                <input type="text" class="form-control {{ $errors->first('details') ? 'is-invalid' : '' }}" placeholder="Detail Laporan" name="details" required autocomplete="off">
                                @if ($errors->has('details'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('details') }}
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <!-- <label>Kategori Laporan</label> -->
                                <input type="hidden" class="form-control" name="kategori" value="kegiatan" placeholder="Kegiatan">
                                @if ($errors->has('kategori'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('kategori') }}
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>File Laporan <small><em>(File harus berekstensi .pdf dengan ukuran maksimal 2 MB)</em></small></label>
                                <input type="file" class="form-control file" name="file" required autocomplete="off">
                                <em><small style="color: red;" class="validate-file"></small></em>
                                @if ($errors->has('file'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('file') }}
                                </div>
                                @endif
                            </div>
                            <a href="{{ action('LaporanKegiatanController@index') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-arrow-left"></i>
                                Kembali
                            </a>
                            <button type="submit" class="btn btn-outline-primary">
                                Submit
                                <i class="fas fa-check"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
    <!-- ./row -->
</section>
<!-- /.content -->
@endsection
@section('script_custom')
<script>
    let max = 2 * 1024 * 1024;
    document.querySelector('.file').addEventListener('change', (e) => {
        let extensions = /(\.pdf)$/i;
        let fileName = document.querySelector('.file').value;
        let fileSize = e.target.files[0].size;
        if (!extensions.exec(fileName)) {
            alert('File yang diinputkan harus berekstensi .pdf');
            document.querySelector('.file').value = '';
            document.querySelector('button[type="submit"]').disabled = false;
            return false;
        } else {
            if (fileSize > max) {
                document.querySelector('.validate-file').innerText = "File yang anda upload harus kurang dari 2MB";
                document.querySelector('.file').value = "";
                document.querySelector('button[type="submit"]').disabled = true;
            } else {
                document.querySelector('.validate-file').innerText = "";
                document.querySelector('button[type="submit"]').disabled = false;
            }
        }
    })
</script>
@endsection