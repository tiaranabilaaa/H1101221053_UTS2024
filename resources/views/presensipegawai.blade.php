@extends('layout.main')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Presensi Pegawai</div>


                <div class="card-body">
                    <form action="#" method="POST">
                        @csrf


                        <div class="form-group">
                            <label for="nama">Nama Pegawai:</label>
                            <input type="text" id="nama" name="nama" class="form-control" required>
                        </div>


                        <div class="form-group">
                            <label for="tanggal">Tanggal:</label>
                            <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                        </div>


                        <div class="form-group">
                            <label for="jam_masuk">Jam Masuk:</label>
                            <input type="time" id="jam_masuk" name="jam_masuk" class="form-control" required>
                        </div>


                        <div class="form-group">
                            <label for="jam_keluar">Jam Keluar:</label>
                            <input type="time" id="jam_keluar" name="jam_keluar" class="form-control" required>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
