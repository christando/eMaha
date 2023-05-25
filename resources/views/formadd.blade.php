@extends('layouts.main')
@section('title', 'emaha - form Student')
@section('content')
<div class="card mt-4">
    <div class="card-header"><Strong> Form Data Student</Strong></div>
    <div class="card-body ">
        <form action="/student/save" method="post">
        @csrf
            <div class="form-group">
                <label>NIM</label>
                <input type="number" class="form-control" name="nim" placeholder="Masukkan NIM">
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
            </div>

            <Label>Gender</Label>
        
        <div class="form-check">
            <input type="radio" name="gender" class="form-check-input" value="pria">
            <label>Pria</label>
        </div>
        <div class="form-check">
            <input type="radio" name="gender" class="form-check-input" value="Wanita">
            <label>Wanita</label>
        </div>

        <label>Program Studi</label>
        <div class="form-group">
            <select name="prodi" class="form-control">
                <option value="0">--Pilih Program Studi--</option>
                <option value="Sistem Informasi">Sistem informasi</option>
                <option value="Informatika">Informatika</option>
                <option value="Ilmu Komputer">Ilmu Komputer</option>
                <option value="Sistem komputer">Sistem komputer</option>
            </select>
        </div>
        
        <label>Minat</label>
        <div class="form-check">
            <input type="checkbox" name="minat[]" class="form-check-input" value="AI">
            <label>Artificial intelegent</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="minat[]" class="form-check-input" value="WEB">
            <label>Web Engineer</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="minat[]" class="form-check-input" value="DBMS">
            <label>Database Engineer</label>
        </div>

        <div class="form-group">
            <button type=submit role="button" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</div>
@endsection