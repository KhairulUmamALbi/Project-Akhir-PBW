
@extends('layouts.main')

@section('content')


<!-- table -->


{{-- <div class="row gutters-sm">
    <div class="col-md-4 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                        class="rounded-circle" width="150">
                    <div class="mt-3">
                        <h4> nama warnet</h4>
                        <p class="text-secondary mb-1">nama</p>
                        <p class="text-muted font-size-sm">Banda Aceh, Indonesia, By Rikes</p>
                        <button class="btn btn-primary"></button>
                        <button class="btn btn-outline-primary"></button>
                    </div>
                </div>
            </div>
        </div> --}}


<table class="table table-hover table-bordered" class="col-md-8 card mb-3 card-body row col-sm-3">
    <thead>
        <tr>
            <th scope="col">no_pc</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Hari</th>
            <th scope="col">Jam</th>
            <th scope="col">Opsi</th>

        </tr>
    </thead>
    <tbody>
        @foreach($Warnet as $dp)
        <tr>
            {{-- <th scope="row">{{$dp->id}}</th> --}}
            {{-- <!-- <td>{{$dp->id}}</td> --> --}}

            <td>{{$dp->no_pc}}</td>
            <td>{{$dp->pemesan}}</td>
            <td>{{$dp->tanggal}}</td>
            <td>{{$dp->hari}}</td>
            <td>{{$dp->jam}}</td>



            <td>
                <form action="/Warnet/{{$dp->id}}" method="post">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger" type="submit" value="delete">
                </form>
            </td>



        </tr>
        @endforeach



    </tbody>
</table>

<div class="text-center">
    <a href="/Warnet/create" class="btn btn-success" class="btn btn-outline-primary">Tambah data pasien</a>
    </div>

@endsection
