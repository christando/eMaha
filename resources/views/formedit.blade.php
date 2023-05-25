@extends('layouts.main')
@section('title', 'eMaha - Form Edit')
@section('content')
<div class="card mt-4">
    <div class="card-header"><Strong> Form Data Student</Strong></div>
    <div class="card-body ">
        @php
            $minat = explode(",", $mhs->minat);

            
        @endphp
        <form action="/student/update/{{$mhs->id}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>NIM</label>
                <input type="number" class="form-control" name="nim" value="{{$mhs->nim}}" readonly>
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="{{$mhs->nama}}">
            </div>

            <Label>Gender</Label>

            <div class="form-check">
                <input type="radio" name="gender" class="form-check-input" value="pria" {{ ($mhs->gender == 'pria') ? 'checked':''}}>
                <label>Pria</label>
            </div>
            <div class="form-check">
                <input type="radio" name="gender" class="form-check-input" value="Wanita" {{ ($mhs->gender == 'Wanita') ? 'checked':''}}>
                <label>Wanita</label>
            </div>

            <label>Program Studi</label>
            <div class="form-group">
                <select name="prodi" class="form-control">
                    <option value="0">--Pilih Program Studi--</option>
                    <option value="Sistem Informasi" {{ ($mhs->prodi == 'Sistem Informasi') ? 'selected':''}}>Sistem informasi</option>
                    <option value="Informatika" {{ ($mhs->prodi == 'Informatika') ? 'selected':''}}>Informatika</option>
                    <option value="Ilmu Komputer" {{ ($mhs->prodi == 'Ilmu Komputer') ? 'selected':''}}>Ilmu Komputer</option>
                    <option value="Sistem komputer" {{ ($mhs->prodi == 'Sistem komputer') ? 'selected':''}}>Sistem komputer</option>
                </select>
            </div>

            <label>Minat</label>
            <div class="form-check">
                
                <input type="checkbox" name="minat[]" class="form-check-input" value="AI" {{ in_array('AI', $minat) ? 'checked':''}} >
                <label>Artificial intelegent</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="minat[]" class="form-check-input" value="WEB" {{ in_array('WEB', $minat) ? 'checked':''}} >
                <label>Web Engineer</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="minat[]" class="form-check-input" value="DBMS" {{ in_array('DBMS', $minat ) ? 'checked':''}} >
                <label>Database Engineer</label>
            </div>

            <div class="form-group">
                <button type=submit role="button" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection