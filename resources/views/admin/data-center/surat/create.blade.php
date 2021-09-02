@extends('layouts.dashboard.app')
@section('title-page', 'New File')
@section('title-header', 'New File')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4 card-outline card-info">
                <div class="card-body pad">
                    <form role="form" action="{{ action('DataCenterController@storeSurat') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" name="filename" placeholder="Content..."
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control" name="image" placeholder="Screenshot surat..."
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Description File</label>
                                <textarea name="description" cols="30" rows="5" class="form-control"
                                    placeholder="Description File..."></textarea>
                            </div>
                            <a href="{{ action('DataCenterController@index') }}" class="btn btn-outline-secondary">
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
