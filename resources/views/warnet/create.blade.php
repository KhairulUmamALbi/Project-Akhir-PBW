@extends('layouts.main')

@section('content')

<form action="/Warnet/store" method="POST" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">No_pc</label>
        <input type="text" class="form-control" id="no_pc" aria-describedby="emailHelp"
            placeholder="No_pc" name="no_pc">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" class="form-control" id="pemesan" aria-describedby="emailHelp"
            placeholder="pemesan" name="pemesan">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" aria-describedby="emailHelp"
            placeholder="Tanggal" name="tanggal">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Hari</label>
        <input type="text" class="form-control" id="hari" aria-describedby="emailHelp"
            placeholder="Hari" name="hari">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Jam</label>
        <input type="text" class="form-control" id="jam" aria-describedby="emailHelp"
            placeholder="Jam" name="jam">
    </div>

    <button type="submit" value="tambah data">Submit</button>

    <a href="/Warnet">back</a>




</form>

@endsection
